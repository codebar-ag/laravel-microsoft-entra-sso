<table class="trace trace-as-text">
    <thead class="trace-head">
        <tr>
            <th class="sf-toggle" data-toggle-selector="#trace-text-<?= $index; ?>" data-toggle-initial="<?= 1 === $index ? 'display' : ''; ?>">
                <div class="trace-class">
                    <?php if ($numExceptions > 1) { ?>
                        <span class="text-muted">[<?= $numExceptions - $index + 1; ?>/<?= $numExceptions; ?>]</span>
