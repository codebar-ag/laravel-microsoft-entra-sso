<?php

/** @var string $type */
/** @var string $content */
[$bgBadgeColor, $bgBadgeText] = match ($type) {
    'INFO' => ['blue', 'INFO'],
    'ERROR' => ['red', 'ERROR'],
};

?>

<div class="my-1">
    <span class="ml-2 px-1 bg-
