<div class="exception-summary <?= !$exceptionMessage ? 'exception-without-message' : ''; ?>">
    <div class="exception-metadata">
        <div class="container">
            <h2 class="exception-hierarchy">
                <?php foreach (array_reverse($exception->getAllPrevious(), true) as $index => $previousException) { ?>
                    <a href="#trace-box-<?= $index + 2; ?>"><?= $this->abbrClass($previousException->getClass()); ?></a>
                    <span class="icon"><?= $this->include('assets/images/chevron-right.svg'); ?></span>
