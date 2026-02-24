<?php declare(strict_types=1);

namespace PhpParser;

use PhpParser\Internal\DiffElem;
use PhpParser\Internal\Differ;
use PhpParser\Internal\PrintableNewAnonClassNode;
use PhpParser\Internal\TokenStream;
use PhpParser\Node\AttributeGroup;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\AssignOp;
use PhpParser\Node\Expr\BinaryOp;
use PhpParser\Node\Expr\Cast;
use PhpParser\Node\IntersectionType;
use PhpParser\Node\MatchArm;
use PhpParser\Node\Param;
use PhpParser\Node\PropertyHook;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use PhpParser\Node\UnionType;

abstract class PrettyPrinterAbstract implements PrettyPrinter {
    protected const FIXUP_PREC_LEFT = 0; // LHS operand affected by precedence
    protected const FIXUP_PREC_RIGHT = 1; // RHS operand affected by precedence
    protected const FIXUP_PREC_UNARY = 2; // Only operand affected by precedence
    protected const FIXUP_CALL_LHS = 3; // LHS of call
    protected const FIXUP_DEREF_LHS = 4; // LHS of dereferencing operation
    protected const FIXUP_STATIC_DEREF_LHS = 5; // LHS of static dereferencing operation
    protected const FIXUP_BRACED_NAME  = 6; // Name operand that may require bracing
    protected const FIXUP_VAR_BRACED_NAME = 7; // Name operand that may require ${} bracing
    protected const FIXUP_ENCAPSED = 8; // Encapsed string part
    protected const FIXUP_NEW = 9; // New/instanceof operand

    protected const MAX_PRECEDENCE = 1000;

    /** @var array<class-string, array{int, int, int}> */
    protected array $precedenceMap = [
        // [precedence, precedenceLHS, precedenceRHS]
        // Where the latter two are the precedences to use for the LHS and RHS of a binary operator,
        // where 1 is added to one of the sides depending on associativity. This information is not
        // used for unary operators and set to -1.
        Expr\Clone_::class             => [-10,   0,   1],
        BinaryOp\Pow::class            => [  0,   0,   1],
        Expr\BitwiseNot::class         => [ 10,  -1,  -1],
        Expr\UnaryPlus::class          => [ 10,  -1,  -1],
        Expr\UnaryMinus::class         => [ 10,  -1,  -1],
        Cast\Int_::class               => [ 10,  -1,  -1],
        Cast\Double::class             => [ 10,  -1,  -1],
        Cast\String_::class            => [ 10,  -1,  -1],
        Cast\Array_::class             => [ 10,  -1,  -1],
        Cast\Object_::class            => [ 10,  -1,  -1],
        Cast\Bool_::class              => [ 10,  -1,  -1],
        Cast\Unset_::class             => [ 10,  -1,  -1],
        Expr\ErrorSuppress::class      => [ 10,  -1,  -1],
        Expr\Instanceof_::class        => [ 20,  -1,  -1],
        Expr\BooleanNot::class         => [ 30,  -1,  -1],
        BinaryOp\Mul::class            => [ 40,  41,  40],
        BinaryOp\Div::class            => [ 40,  41,  40],
        BinaryOp\Mod::class            => [ 40,  41,  40],
        BinaryOp\Plus::class           => [ 50,  51,  50],
        BinaryOp\Minus::class          => [ 50,  51,  50],
        // FIXME: This precedence is incorrect for PHP 8.
        BinaryOp\Concat::class         => [ 50,  51,  50],
        BinaryOp\ShiftLeft::class      => [ 60,  61,  60],
        BinaryOp\ShiftRight::class     => [ 60,  61,  60],
        BinaryOp\Pipe::class           => [ 65,  66,  65],
        BinaryOp\Smaller::class        => [ 70,  70,  70],
        BinaryOp\SmallerOrEqual::class => [ 70,  70,  70],
        BinaryOp\Greater::class        => [ 70,  70,  70],
        BinaryOp\GreaterOrEqual::class => [ 70,  70,  70],
        BinaryOp\Equal::class          => [ 80,  80,  80],
        BinaryOp\NotEqual::class       => [ 80,  80,  80],
        BinaryOp\Identical::class      => [ 80,  80,  80],
        BinaryOp\NotIdentical::class   => [ 80,  80,  80],
        BinaryOp\Spaceship::class      => [ 80,  80,  80],
        BinaryOp\BitwiseAnd::class     => [ 90,  91,  90],
        BinaryOp\BitwiseXor::class     => [100, 101, 100],
        BinaryOp\BitwiseOr::class      => [110, 111, 110],
        BinaryOp\BooleanAnd::class     => [120, 121, 120],
        BinaryOp\BooleanOr::class      => [130, 131, 130],
        BinaryOp\Coalesce::class       => [140, 140, 141],
        Expr\Ternary::class            => [150, 150, 150],
        Expr\Assign::class             => [160,  -1,  -1],
        Expr\AssignRef::class          => [160,  -1,  -1],
        AssignOp\Plus::class           => [160,  -1,  -1],
        AssignOp\Minus::class          => [160,  -1,  -1],
        AssignOp\Mul::class            => [160,  -1,  -1],
        AssignOp\Div::class            => [160,  -1,  -1],
        AssignOp\Concat::class         => [160,  -1,  -1],
        AssignOp\Mod::class            => [160,  -1,  -1],
        AssignOp\BitwiseAnd::class     => [160,  -1,  -1],
        AssignOp\BitwiseOr::class      => [160,  -1,  -1],
        AssignOp\BitwiseXor::class     => [160,  -1,  -1],
        AssignOp\ShiftLeft::class      => [160,  -1,  -1],
        AssignOp\ShiftRight::class     => [160,  -1,  -1],
        AssignOp\Pow::class            => [160,  -1,  -1],
        AssignOp\Coalesce::class       => [160,  -1,  -1],
        Expr\YieldFrom::class          => [170,  -1,  -1],
        Expr\Yield_::class             => [175,  -1,  -1],
        Expr\Print_::class             => [180,  -1,  -1],
        BinaryOp\LogicalAnd::class     => [190, 191, 190],
        BinaryOp\LogicalXor::class     => [200, 201, 200],
        BinaryOp\LogicalOr::class      => [210, 211, 210],
        Expr\Include_::class           => [220,  -1,  -1],
        Expr\ArrowFunction::class      => [230,  -1,  -1],
        Expr\Throw_::class             => [240,  -1,  -1],
        Expr\Cast\Void_::class         => [250,  -1,  -1],
    ];

    /** @var int Current indentation level. */
    protected int $indentLevel;
    /** @var string String for single level of indentation */
    private string $indent;
    /** @var int Width in spaces to indent by. */
    private int $indentWidth;
    /** @var bool Whether to use tab indentation. */
    private bool $useTabs;
    /** @var int Width in spaces of one tab. */
    private int $tabWidth = 4;

    /** @var string Newline style. Does not include current indentation. */
    protected string $newline;
    /** @var string Newline including current indentation. */
    protected string $nl;
    /** @var string|null Token placed at end of doc string to ensure it is followed by a newline.
     *                   Null if flexible doc strings are used. */
    protected ?string $docStringEndToken;
    /** @var bool Whether semicolon namespaces can be used (i.e. no global namespace is used) */
    protected bool $canUseSemicolonNamespaces;
    /** @var bool Whether to use short array syntax if the node specifies no preference */
    protected bool $shortArraySyntax;
    /** @var PhpVersion PHP version to target */
    protected PhpVersion $phpVersion;

    /** @var TokenStream|null Original tokens for use in format-preserving pretty print */
    protected ?TokenStream $origTokens;
    /** @var Internal\Differ<Node> Differ for node lists */
    protected Differ $nodeListDiffer;
    /** @var array<string, bool> Map determining whether a certain character is a label character */
    protected array $labelCharMap;
    /**
     * @var array<string, array<string, int>> Map from token classes and subnode names to FIXUP_* constants.
     *                                        This is used during format-preserving prints to place additional parens/braces if necessary.
     */
    protected array $fixupMap;
    /**
     * @var array<string, array{left?: int|string, right?: int|string}> Map from "{$node->getType()}->{$subNode}"
     *                                                                  to ['left' => $l, 'right' => $r], where $l and $r specify the token type that needs to be stripped
     *                                                                  when removing this node.
     */
    protected array $removalMap;
    /**
     * @var array<string, array{int|string|null, bool, string|null, string|null}> Map from
     *                                                                            "{$node->getType()}->{$subNode}" to [$find, $beforeToken, $extraLeft, $extraRight].
     *                                                                            $find is an optional token after which the insertion occurs. $extraLeft/Right
     *                                                                            are optionally added before/after the main insertions.
     */
    protected array $insertionMap;
    /**
     * @var array<string, string> Map From "{$class}->{$subNode}" to string that should be inserted
     *                            between elements of this list subnode.
     */
    protected array $listInsertionMap;

    /**
     * @var array<string, array{int|string|null, string, string}>
     */
    protected array $emptyListInsertionMap;
    /** @var array<string, array{string, int, int}>
     *       Map from "{$class}->{$subNode}" to [$printFn, $skipToken, $findToken] where $printFn is the function to
     *       print the modifiers, $skipToken is the token to skip at the start and $findToken is the token before which
     *       the modifiers should be reprinted. */
    protected array $modifierChangeMap;

    /**
     * Creates a pretty printer instance using the given options.
     *
     * Supported options:
     *  * PhpVersion $phpVersion: The PHP version to target (default to PHP 7.4). This option
     *                            controls compatibility of the generated code with older PHP
     *                            versions in cases where a simple stylistic choice exists (e.g.
     *                            array() vs []). It is safe to pretty-print an AST for a newer
     *                            PHP version while specifying an older target (but the result will
     *                            of course not be compatible with the older version in that case).
     *  * string $newline:        The newline style to use. Should be "\n" (default) or "\r\n".
     *  * string $indent:         The indentation to use. Should either be all spaces or a single
     *                            tab. Defaults to four spaces ("    ").
     *  * bool $shortArraySyntax: Whether to use [] instead of array() as the default array
     *                            syntax, if the node does not specify a format. Defaults to whether
     *                            the phpVersion support short array syntax.
     *
     * @param array{
     *     phpVersion?: PhpVersion, newline?: string, indent?: string, shortArraySyntax?: bool
     * } $options Dictionary of formatting options
     */
    public function __construct(array $options = []) {
        $this->phpVersion = $options['phpVersion'] ?? PhpVersion::fromComponents(7, 4);

        $this->newline = $options['newline'] ?? "\n";
        if ($this->newline !== "\n" && $this->newline != "\r\n") {
            throw new \LogicException('Option "newline" must be one of "\n" or "\r\n"');
        }

        $this->shortArraySyntax =
            $options['shortArraySyntax'] ?? $this->phpVersion->supportsShortArraySyntax();
        $this->docStringEndToken =
            $this->phpVersion->supportsFlexibleHeredoc() ? null : '_DOC_STRING_END_' . mt_rand();

        $this->indent = $indent = $options['indent'] ?? '    ';
        if ($indent === "\t") {
            $this->useTabs = true;
            $this->indentWidth = $this->tabWidth;
        } elseif ($indent === \str_repeat(' ', \strlen($indent))) {
            $this->useTabs = false;
            $this->indentWidth = \strlen($indent);
        } else {
            throw new \LogicException('Option "indent" must either be all spaces or a single tab');
        }
    }

    /**
     * Reset pretty printing state.
     */
    protected function resetState(): void {
        $this->indentLevel = 0;
        $this->nl = $this->newline;
        $this->origTokens = null;
    }

    /**
     * Set indentation level
     *
     * @param int $level Level in number of spaces
     */
    protected function setIndentLevel(int $level): void {
        $this->indentLevel = $level;
        if ($this->useTabs) {
            $tabs = \intdiv($level, $this->tabWidth);
            $spaces = $level % $this->tabWidth;
            $this->nl = $this->newline . \str_repeat("\t", $tabs) . \str_repeat(' ', $spaces);
        } else {
            $this->nl = $this->newline . \str_repeat(' ', $level);
        }
    }

    /**
     * Increase indentation level.
     */
    protected function indent(): void {
        $this->indentLevel += $this->indentWidth;
        $this->nl .= $this->indent;
    }

    /**
     * Decrease indentation level.
     */
    protected function outdent(): void {
        assert($this->indentLevel >= $this->indentWidth);
        $this->setIndentLevel($this->indentLevel - $this->indentWidth);
    }

    /**
     * Pretty prints an array of statements.
     *
     * @param Node[] $stmts Array of statements
     *
     * @return string Pretty printed statements
     */
    public function prettyPrint(array $stmts): string {
        $this->resetState();
        $this->preprocessNodes($stmts);

        return ltrim($this->handleMagicTokens($this->pStmts($stmts, false)));
    }

    /**
     * Pretty prints an expression.
     *
     * @param Expr $node Expression node
     *
     * @return string Pretty printed node
     */
    public function prettyPrintExpr(Expr $node): string {
        $this->resetState();
        return $this->handleMagicTokens($this->p($node));
    }

    /**
     * Pretty prints a file of statements (includes the opening
