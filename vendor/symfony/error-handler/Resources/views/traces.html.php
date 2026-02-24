<div class="trace trace-as-html" id="trace-box-<?= $index; ?>">
    <div class="trace-details">
        <div class="trace-head">
            <div class="sf-toggle" data-toggle-selector="#trace-html-<?= $index; ?>" data-toggle-initial="<?= $expand ? 'display' : ''; ?>">
                <span class="icon icon-close"><?= $this->include('assets/images/icon-minus-square-o.svg'); ?></span>
                <span class="icon icon-open"><?= $this->include('assets/images/icon-plus-square-o.svg'); ?></span>
                <?php
                $separator = strrpos($exception['class'], '\\');
                $separator = false === $separator ? 0 : $separator + 1;

                $namespace = substr($exception['class'], 0, $separator);
                $class = substr($exception['class'], $separator);
                ?>
