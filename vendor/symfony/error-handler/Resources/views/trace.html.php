<div class="trace-line-header break-long-words <?= $trace['file'] ? 'sf-toggle' : ''; ?>" data-toggle-selector="#trace-html-<?= $prefix; ?>-<?= $i; ?>" data-toggle-initial="<?= 'expanded' === $style ? 'display' : ''; ?>">
    <?php if ($trace['file']) { ?>
        <span class="icon icon-close"><?= $this->include('assets/images/icon-minus-square.svg'); ?></span>
        <span class="icon icon-open"><?= $this->include('assets/images/icon-plus-square.svg'); ?></span>
