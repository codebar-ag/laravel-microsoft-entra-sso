<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2026 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy;

use Psy\CodeCleaner\NoReturnValue;
use Psy\Exception\BreakException;
use Psy\Exception\ErrorException;
use Psy\Exception\Exception as PsyException;
use Psy\Exception\InterruptException;
use Psy\Exception\RuntimeException;
use Psy\Exception\ThrowUpException;
use Psy\ExecutionLoop\ProcessForker;
use Psy\ExecutionLoop\RunkitReloader;
use Psy\ExecutionLoop\SignalHandler;
use Psy\ExecutionLoop\UopzReloader;
use Psy\Formatter\TraceFormatter;
use Psy\Input\ShellInput;
use Psy\Input\SilentInput;
use Psy\Output\ShellOutput;
use Psy\Readline\Readline;
use Psy\Readline\ReadlineAware;
use Psy\TabCompletion\AutoCompleter;
use Psy\TabCompletion\Matcher;
use Psy\TabCompletion\Matcher\CommandsMatcher;
use Psy\VarDumper\PresenterAware;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command as BaseCommand;
use Symfony\Component\Console\Exception\ExceptionInterface as SymfonyConsoleException;
use Symfony\Component\Console\Formatter\OutputFormatter;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * The Psy Shell application.
 *
 * Usage:
 *
 *     $shell = new Shell;
 *     $shell->run();
 *
 * @author Justin Hileman <justin@justinhileman.info>
 */
class Shell extends Application
{
    const VERSION = 'v0.12.20';

    private Configuration $config;
    private ?CodeCleaner $cleaner = null;
    private OutputInterface $output;
    private ?int $originalVerbosity = null;
    private ?Readline $readline = null;
    private array $inputBuffer;
    /** @var string|false|null */
    private $code = null;
    private array $codeBuffer = [];
    private bool $codeBufferOpen = false;
    private array $codeStack;
    private string $stdoutBuffer;
    private Context $context;
    private array $includes;
    private bool $outputWantsNewline = false;
    private array $loopListeners;
    private bool $booted = false;
    private bool $autoloadWarmed = false;
    private ?AutoCompleter $autoCompleter = null;
    private array $matchers = [];
    private ?CommandsMatcher $commandsMatcher = null;
    private bool $lastExecSuccess = true;
    private bool $nonInteractive = false;
    private ?int $errorReporting = null;

    /**
     * Create a new Psy Shell.
     *
     * @param Configuration|null $config (default: null)
     */
    public function __construct(?Configuration $config = null)
    {
        $this->config = $config ?: new Configuration();
        $this->context = new Context();
        $this->includes = [];
        $this->inputBuffer = [];
        $this->codeStack = [];
        $this->stdoutBuffer = '';
        $this->loopListeners = $this->getDefaultLoopListeners();

        parent::__construct('Psy Shell', self::VERSION);

        $this->config->setShell($this);

        // Register the current shell session's config with \Psy\info
        \Psy\info($this->config);
    }

    /**
     * Warm the autoloader by loading classes at startup.
     *
     * This improves tab completion by making classes available via get_declared_classes()
     * rather than maintaining a separate list of available classes.
     */
    private function warmAutoloader(): void
    {
        if ($this->autoloadWarmed) {
            return;
        }
        $this->autoloadWarmed = true;

        $warmers = $this->config->getAutoloadWarmers();
        if (empty($warmers)) {
            return;
        }

        $output = $this->config->getOutput();
        if ($output instanceof ConsoleOutput) {
            $output = $output->getErrorOutput();
        }

        $start = \microtime(true);
        $loadedCount = 0;

        foreach ($warmers as $warmer) {
            try {
                $loadedCount += $warmer->warm();
            } catch (\Throwable $e) {
                $output->writeln($this->formatException($e), OutputInterface::VERBOSITY_DEBUG);
            }
        }

        $message = \sprintf(
            '<whisper>Autoload warming: loaded %d classes in %.1fms</whisper>',
            $loadedCount,
            (\microtime(true) - $start) * 1000
        );

        $output->writeln($message, OutputInterface::VERBOSITY_DEBUG);

        if (!\class_exists('Composer\\ClassMapGenerator\\ClassMapGenerator', false)) {
            $output->writeln('<whisper>Autoload warming works best with composer/class-map-generator installed</whisper>');
        }
    }

    /**
     * Boot the shell, initializing the CodeCleaner and Readline.
     *
     * This is called lazily when commands or methods require these dependencies.
     * If input/output are provided, they'll be used for trust prompts. Otherwise,
     * falls back to config defaults.
     */
    public function boot(?InputInterface $input = null, ?OutputInterface $output = null): void
    {
        if ($this->booted) {
            return;
        }

        $this->loadLocalConfig($input, $output);

        $this->cleaner = $this->config->getCodeCleaner();
        $this->readline = $this->config->getReadline();
        $this->booted = true;

        $this->refreshCommandDependencies();
    }

    /**
     * Load local config with trust prompt if needed.
     */
    private function loadLocalConfig(?InputInterface $input, ?OutputInterface $output): void
    {
        if ($output === null) {
            $output = $this->config->getOutput();
        }

        if ($input === null) {
            $input = new ArrayInput([]);
            // Programmatic callers (e.g. Shell::execute) don't provide a real
            // interactive input stream, so trust prompts must not block.
            $input->setInteractive(false);
        }

        $this->config->loadLocalConfigWithPrompt($input, $output);
    }

    /**
     * Refresh dependencies on all registered commands.
     */
    private function refreshCommandDependencies(): void
    {
        foreach ($this->all() as $command) {
            $this->configureCommand($command);
        }
    }

    /**
     * Configure a command with context and dependencies.
     */
    private function configureCommand(BaseCommand $command): void
    {
        if ($command instanceof ContextAware) {
            $command->setContext($this->context);
        }

        if ($this->booted) {
            if ($command instanceof CodeCleanerAware && $this->cleaner !== null) {
                $command->setCodeCleaner($this->cleaner);
            }

            if ($command instanceof PresenterAware) {
                $command->setPresenter($this->config->getPresenter());
            }

            if ($command instanceof ReadlineAware && $this->readline !== null) {
                $command->setReadline($this->readline);
            }
        }
    }

    /**
     * Check whether the first thing in a backtrace is an include call.
     *
     * This is used by the psysh bin to decide whether to start a shell on boot,
     * or to simply autoload the library.
     */
    public static function isIncluded(array $trace): bool
    {
        $isIncluded = isset($trace[0]['function']) &&
          \in_array($trace[0]['function'], ['require', 'include', 'require_once', 'include_once']);

        // Detect Composer PHP bin proxies.
        if ($isIncluded && \array_key_exists('_composer_autoload_path', $GLOBALS) && \preg_match('{[\\\\/]psysh$}', $trace[0]['file'])) {
            // If we're in a bin proxy, we'll *always* see one include, but we
            // care if we see a second immediately after that.
            return isset($trace[1]['function']) &&
                \in_array($trace[1]['function'], ['require', 'include', 'require_once', 'include_once']);
        }

        return $isIncluded;
    }

    /**
     * Check if the currently running PsySH bin is a phar archive.
     */
    public static function isPhar(): bool
    {
        return \class_exists("\Phar") && \Phar::running() !== '' && \strpos(__FILE__, \Phar::running(true)) === 0;
    }

    /**
     * Invoke a Psy Shell from the current context.
     *
     * @see Psy\debug
     * @deprecated will be removed in 1.0. Use \Psy\debug instead
     *
     * @param array         $vars   Scope variables from the calling context (default: [])
     * @param object|string $bindTo Bound object ($this) or class (self) value for the shell
     *
     * @return array Scope variables from the debugger session
     */
    public static function debug(array $vars = [], $bindTo = null): array
    {
        @\trigger_error('`Psy\\Shell::debug` is deprecated; call `Psy\\debug` instead.', \E_USER_DEPRECATED);

        return \Psy\debug($vars, $bindTo);
    }

    /**
     * Adds a command object.
     *
     * @deprecated since Symfony Console 7.4, use addCommand() instead
     *
     * @param BaseCommand $command A Symfony Console Command object
     *
     * @return BaseCommand The registered command
     */
    public function add(BaseCommand $command): BaseCommand
    {
        return $this->addCommand($command);
    }

    /**
     * Adds a command object.
     *
     * @param BaseCommand|callable $command A Symfony Console Command object or callable
     *
     * @return BaseCommand|null The registered command, or null
     */
    public function addCommand($command): ?BaseCommand
    {
        // For Symfony Console < 7.4, use parent::add()
        if (\method_exists(Application::class, 'addCommand')) {
            /** @phan-suppress-next-line PhanUndeclaredStaticMethod (Symfony Console 7.4+) */
            $ret = parent::addCommand($command);
        } else {
            $ret = parent::add($command);
        }

        if ($ret) {
            $this->configureCommand($ret);

            if (isset($this->commandsMatcher)) {
                $this->commandsMatcher->setCommands($this->all());
            }
        }

        return $ret;
    }

    /**
     * Gets the default input definition.
     *
     * @return InputDefinition An InputDefinition instance
     */
    protected function getDefaultInputDefinition(): InputDefinition
    {
        return new InputDefinition([
            new InputArgument('command', InputArgument::REQUIRED, 'The command to execute'),
            new InputOption('--help', '-h', InputOption::VALUE_NONE, 'Display this help message.'),
        ]);
    }

    /**
     * Gets the default commands that should always be available.
     *
     * @return array An array of default Command instances
     */
    protected function getDefaultCommands(): array
    {
        $sudo = new Command\SudoCommand();

        $hist = new Command\HistoryCommand();

        $doc = new Command\DocCommand();
        $doc->setConfiguration($this->config);

        $commands = [
            new Command\HelpCommand(),
            new Command\ListCommand(),
            new Command\DumpCommand(),
            $doc,
            new Command\ShowCommand(),
            new Command\WtfCommand(),
            new Command\WhereamiCommand(),
            new Command\ThrowUpCommand(),
            new Command\TimeitCommand(),
            new Command\TraceCommand(),
            new Command\BufferCommand(),
            new Command\ClearCommand(),
            new Command\EditCommand($this->config->getRuntimeDir(false)),
            // new Command\PsyVersionCommand(),
            $sudo,
            $hist,
            new Command\ExitCommand(),
        ];

        // Only add yolo command if UopzReloader is supported
        if (UopzReloader::isSupported()) {
            $yolo = new Command\YoloCommand();
            $commands[] = $yolo;
        }

        return $commands;
    }

    /**
     * @return Matcher\AbstractMatcher[]
     */
    protected function getDefaultMatchers(): array
    {
        // Store the Commands Matcher for later. If more commands are added,
        // we'll update the Commands Matcher too.
        $this->commandsMatcher = new CommandsMatcher($this->all());

        return [
            $this->commandsMatcher,
            new Matcher\KeywordsMatcher(),
            new Matcher\VariablesMatcher(),
            new Matcher\ConstantsMatcher(),
            new Matcher\FunctionsMatcher(),
            new Matcher\ClassNamesMatcher(),
            new Matcher\ClassMethodsMatcher(),
            new Matcher\ClassAttributesMatcher(),
            new Matcher\ObjectMethodsMatcher(),
            new Matcher\ObjectAttributesMatcher(),
            new Matcher\MagicMethodsMatcher(),
            new Matcher\MagicPropertiesMatcher(),
            new Matcher\ClassMethodDefaultParametersMatcher(),
            new Matcher\ObjectMethodDefaultParametersMatcher(),
            new Matcher\FunctionDefaultParametersMatcher(),
        ];
    }

    /**
     * Gets the default command loop listeners.
     *
     * @return array An array of Execution Loop Listener instances
     */
    protected function getDefaultLoopListeners(): array
    {
        $listeners = [];

        if ($inputLogger = $this->config->getInputLogger()) {
            $listeners[] = $inputLogger;
        }

        if (ProcessForker::isSupported() && $this->config->usePcntl()) {
            $listeners[] = new ProcessForker();
        } elseif (SignalHandler::isSupported()) {
            // Only use SignalHandler when process forking is disabled
            // ProcessForker handles SIGINT in the parent process, which is cleaner
            $listeners[] = new SignalHandler();
        }

        if (RunkitReloader::isSupported()) {
            $listeners[] = new RunkitReloader();
        } elseif (UopzReloader::isSupported()) {
            $listeners[] = new UopzReloader();
        }

        if ($executionLogger = $this->config->getExecutionLogger()) {
            $listeners[] = $executionLogger;
        }

        return $listeners;
    }

    /**
     * Enable or disable force-reload mode for code reloaders.
     *
     * Used by the `yolo` command to bypass safety warnings when reloading code.
     */
    public function setForceReload(bool $force): void
    {
        foreach ($this->loopListeners as $listener) {
            if (\method_exists($listener, 'setForceReload')) {
                $listener->setForceReload($force);
            }
        }
    }

    /**
     * Add tab completion matchers.
     *
     * @param array $matchers
     */
    public function addMatchers(array $matchers)
    {
        $this->matchers = \array_merge($this->matchers, $matchers);

        if (isset($this->autoCompleter)) {
            $this->addMatchersToAutoCompleter($matchers);
        }
    }

    /**
     * @deprecated Call `addMatchers` instead
     *
     * @param array $matchers
     */
    public function addTabCompletionMatchers(array $matchers)
    {
        @\trigger_error('`addTabCompletionMatchers` is deprecated; call `addMatchers` instead.', \E_USER_DEPRECATED);

        $this->addMatchers($matchers);
    }

    /**
     * Set the Shell output.
     *
     * @param OutputInterface $output
     */
    public function setOutput(OutputInterface $output)
    {
        $this->output = $output;
        $this->originalVerbosity = $output->getVerbosity();
    }

    /**
     * Runs PsySH.
     *
     * @param InputInterface|null  $input  An Input instance
     * @param OutputInterface|null $output An Output instance
     *
     * @return int 0 if everything went fine, or an error code
     */
    public function run(?InputInterface $input = null, ?OutputInterface $output = null): int
    {
        // We'll just ignore the input passed in, and set up our own!
        $input = new ArrayInput([]);

        if ($output === null) {
            $output = $this->config->getOutput();
        }

        $this->setAutoExit(false);
        $this->setCatchExceptions(false);

        try {
            return parent::run($input, $output);
        } catch (BreakException $e) {
            // BreakException from ProcessForker or exit() - return its exit code
            return $e->getCode();
        } catch (\Throwable $e) {
            $this->writeException($e);
        }

        return 1;
    }

    /**
     * Runs PsySH.
     *
     * @throws \Throwable if thrown via the `throw-up` command
     *
     * @param InputInterface  $input  An Input instance
     * @param OutputInterface $output An Output instance
     *
     * @return int 0 if everything went fine, or an error code
     */
    public function doRun(InputInterface $input, OutputInterface $output): int
    {
        $this->setOutput($output);
        $this->boot($input, $output);
        $this->resetCodeBuffer();
        $this->warmAutoloader();

        if ($input->isInteractive()) {
            // @todo should it be possible to have raw output in an interactive run?
            return $this->doInteractiveRun();
        } else {
            return $this->doNonInteractiveRun($this->config->rawOutput());
        }
    }

    /**
     * Run PsySH in interactive mode.
     *
     * Initializes tab completion and readline history, then spins up the
     * execution loop.
     *
     * @throws \Throwable if thrown via the `throw-up` command
     *
     * @return int 0 if everything went fine, or an error code
     */
    private function doInteractiveRun(): int
    {
        $this->initializeTabCompletion();
        $this->readline->readHistory();

        $this->output->writeln($this->getHeader());
        $this->writeVersionInfo();
        $this->writeManualUpdateInfo();
        $this->writeStartupMessage();

        try {
            $this->beforeRun();
            $this->loadIncludes();
            $loop = new ExecutionLoopClosure($this);
            $exitCode = $loop->execute();
            $this->afterRun($exitCode ?? 0);

            return $exitCode ?? 0;
        } catch (ThrowUpException $e) {
            throw $e->getPrevious();
        } catch (BreakException $e) {
            // The ProcessForker throws a BreakException to finish the main thread.
            return $e->getCode();
        }
    }

    /**
     * Run PsySH in non-interactive mode.
     *
     * Note that this isn't very useful unless you supply "include" arguments at
     * the command line, or code via stdin.
     *
     * @param bool $rawOutput
     *
     * @return int 0 if everything went fine, or an error code
     */
    private function doNonInteractiveRun(bool $rawOutput): int
    {
        $this->nonInteractive = true;

        // If raw output is enabled (or output is piped) we don't want startup messages.
        if (!$rawOutput && !$this->config->outputIsPiped()) {
            $this->output->writeln($this->getHeader());
            $this->writeVersionInfo();
            $this->writeManualUpdateInfo();
            $this->writeStartupMessage();
        }

        $this->beforeRun();
        $this->loadIncludes();

        // For non-interactive execution, read only from the input buffer or from piped input.
        // Otherwise it'll try to readline and hang, waiting for user input with no indication of
        // what's holding things up.
        if (!empty($this->inputBuffer) || $this->config->inputIsPiped()) {
            $this->getInput(false);
        }

        try {
            if ($this->hasCode()) {
                $ret = $this->execute($this->flushCode());
                $this->writeReturnValue($ret, $rawOutput);
            }
        } catch (BreakException $e) {
            // User called exit() in non-interactive mode
            $this->afterRun($e->getCode());
            $this->nonInteractive = false;

            return $e->getCode();
        }

        $this->afterRun(0);
        $this->nonInteractive = false;

        return 0;
    }

    /**
     * Configures the input and output instances based on the user arguments and options.
     */
    protected function configureIO(InputInterface $input, OutputInterface $output): void
    {
        // @todo overrides via environment variables (or should these happen in config? ... probably config)
        $input->setInteractive($this->config->getInputInteractive());

        if ($this->config->getOutputDecorated() !== null) {
            $output->setDecorated($this->config->getOutputDecorated());
        }

        $output->setVerbosity($this->config->getOutputVerbosity());
    }

    /**
     * Load user-defined includes.
     */
    private function loadIncludes()
    {
        // Load user-defined includes
        $load = function (self $__psysh__) {
            \set_error_handler([$__psysh__, 'handleError']);
            foreach ($__psysh__->getIncludes() as $__psysh_include__) {
                try {
                    include_once $__psysh_include__;
                } catch (\Exception $_e) {
                    $__psysh__->writeException($_e);
                }
            }
            \restore_error_handler();
            unset($__psysh_include__);

            // Override any new local variables with pre-defined scope variables
            \extract($__psysh__->getScopeVariables(false));

            // ... then add the whole mess of variables back.
            $__psysh__->setScopeVariables(\get_defined_vars());
        };

        $load($this);
    }

    /**
     * Read user input.
     *
     * This will continue fetching user input until the code buffer contains
     * valid code.
     *
     * @throws BreakException if user hits Ctrl+D
     *
     * @param bool $interactive
     */
    public function getInput(bool $interactive = true)
    {
        $this->boot();

        $this->codeBufferOpen = false;

        do {
            // reset output verbosity (in case it was altered by a subcommand)
            $this->output->setVerbosity($this->originalVerbosity);

            $input = $this->readline();

            /*
             * Handle Ctrl+D. It behaves differently in different cases:
             *
             *   1) In an expression, like a function or "if" block, clear the input buffer
             *   2) At top-level session, behave like the exit command
             *   3) When non-interactive, return, because that's the end of stdin
             */
            if ($input === false) {
                if (!$interactive) {
                    return;
                }

                $this->output->writeln('');

                if ($this->hasCode()) {
                    $this->resetCodeBuffer();
                } else {
                    throw new BreakException('Ctrl+D');
                }
            }

            // handle empty input
            if (\trim($input) === '' && !$this->codeBufferOpen) {
                continue;
            }

            $input = $this->onInput($input);

            // If the input isn't in an open string or comment, check for commands to run.
            if ($this->hasCommand($input) && !$this->inputInOpenStringOrComment($input)) {
                $this->addHistory($input);
                $this->runCommand($input);

                continue;
            }

            $this->addCode($input);
        } while (!$interactive || !$this->hasValidCode());
    }

    /**
     * Check whether the code buffer (plus current input) is in an open string or comment.
     *
     * @param string $input current line of input
     *
     * @return bool true if the input is in an open string or comment
     */
    private function inputInOpenStringOrComment(string $input): bool
    {
        if (!$this->hasCode()) {
            return false;
        }

        $code = $this->codeBuffer;
        $code[] = $input;
        $tokens = @\token_get_all('
