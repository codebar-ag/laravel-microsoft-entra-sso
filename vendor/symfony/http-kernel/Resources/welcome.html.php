<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$renderSymfonyLogoSvg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" height="48" width="48" viewBox="0 0 64.9 64.9"><path fill="currentColor" d="M32.5 0A32.5 32.5 0 0 0 0 32.5a32.5 32.5 0 0 0 32.5 32.4 32.5 32.5 0 0 0 32.4-32.4A32.5 32.5 0 0 0 32.5 0Zm14.1 12c3.3-.1 5.8 1.4 6 3.8 0 1-.6 3-2.6 3-1.5 0-2.6-.9-2.6-2.2 0-.5 0-1 .4-1.5.4-.6.4-.7.4-1 0-.9-1.3-.9-1.7-.9-4.8.2-6.1 6.8-7.2 12.1l-.5 2.8c2.8.4 4.8 0 6-.8 1.5-1-.5-2-.2-3.2a2.3 2.3 0 0 1 2.1-1.8c1.2 0 2 1.2 2 2.5 0 2-2.7 5-8.2 4.8l-2-.1-1 5.7c-.9 4.3-2.1 10.3-6.5 15.4a13.4 13.4 0 0 1-9.4 5.3c-3.2.1-5.4-1.6-5.4-3.9-.1-2.2 1.9-3.4 3.1-3.5 1.8 0 3 1.2 3 2.6 0 1.3-.6 1.6-1 1.9-.3.2-.7.4-.7 1 0 .1.2.6 1 .6 1.3 0 2.2-.7 2.9-1.2 3.1-2.6 4.3-7.1 5.9-15.4l.3-2c.6-2.8 1.2-5.8 2-8.8-2.1-1.6-3.5-3.7-6.4-4.5-2-.6-3.3-.1-4.2 1a3 3 0 0 0 .3 4l1.7 1.9c2 2.3 3.1 4.1 2.7 6.6-.7 3.9-5.3 6.9-10.9 5.2-4.7-1.4-5.6-4.8-5-6.6.5-1.6 1.8-2 3-1.6 1.4.5 2 2 1.5 3.3 0 .2 0 .4-.2.7l-.6 1c-.3 1 1 1.7 2 2 2.1.7 4.2-.4 4.7-2.1.5-1.6-.5-2.7-1-3.1l-2-2.1c-.8-1-2.8-3.9-1.9-7a6.8 6.8 0 0 1 2.4-3.5c2.4-1.8 5-2 7.6-1.3 3.2.9 4.8 3 6.8 4.7a28 28 0 0 1 5.1-9.3c2.2-2.6 5-4.4 8.3-4.5z"/></svg>
SVG;

// SVG icons from the Tabler Icons project
// MIT License - Copyright (c) 2020-2023 Paweł Kuna
// https://github.com/tabler/tabler-icons/blob/master/LICENSE

$renderBoxIconSvg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-tabler icon-tabler-box" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
    <path d="M12 12l8 -4.5" />
    <path d="M12 12l0 9" />
    <path d="M12 12l-8 -4.5" />
</svg>
SVG;

$renderFolderIconSvg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-tabler icon-tabler-folder-open" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M5 19l2.757 -7.351a1 1 0 0 1 .936 -.649h12.307a1 1 0 0 1 .986 1.164l-.996 5.211a2 2 0 0 1 -1.964 1.625h-14.026a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2h4l3 3h7a2 2 0 0 1 2 2v2"></path>
</svg>
SVG;

$renderInfoIconSvg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-tabler icon-tabler-info-circle" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
    <path d="M12 9h.01"></path>
    <path d="M11 12h1v4h1"></path>
</svg>
SVG;

$renderNextStepIconSvg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-tabler icon-tabler-square-chevrons-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <path d="M8 9l3 3l-3 3" />
    <path d="M13 9l3 3l-3 3" />
    <path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" />
</svg>
SVG;

$renderLearnIconSvg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-tabler icon-tabler-book" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
    <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
    <path d="M3 6l0 13"></path>
    <path d="M12 6l0 13"></path>
    <path d="M21 6l0 13"></path>
</svg>
SVG;

$renderCommunityIconSvg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-tabler icon-tabler-users" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
</svg>
SVG;

$renderUpdatesIconSvg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-tabler icon-tabler-bell-ringing" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
    <path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727" />
    <path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727" />
</svg>
SVG;

$renderWavesSvg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" style="pointer-events: none" class="wave" width="100%" height="50px" preserveAspectRatio="none" viewBox="0 0 1920 75">
    <defs>
        <style>
            .a { fill: none; }
            .b { clip-path: url(#a); }
            .c, .d { fill: var(--light-color); }
            .d { opacity: 0.5; isolation: isolate; }
            @keyframes waveMotion {
                0% { transform: scaleX(1) translateX(0); }
                50% { transform: scaleX(1.5) translateX(-30%); }
                0% { transform: scaleX(1) translateX(0); }
            }

            .b:nth-child(5) { animation: waveMotion 14s infinite alternate; }
            .b:nth-child(2) { animation: waveMotion 12s infinite alternate; }
            .b:nth-child(3) { animation: waveMotion 13s infinite alternate; }
            .b:nth-child(4) { animation: waveMotion 8s infinite alternate; }

            @media (prefers-reduced-motion) {
                .b { animation: none !important; }
            }
        </style>
        <clipPath id="a"><rect class="a" width="1920" height="75"></rect></clipPath>
    </defs>
    <g class="b">
        <path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path>
    </g>
    <g class="b">
        <path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path>
    </g>
    <g class="b">
        <path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path>
    </g>
    <g class="b">
        <path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path>
    </g>
</svg>
SVG;
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noodp, notranslate, noimageindex" />
    <title>Welcome to Symfony!</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>👋</text></svg>" />
    <style>
        :root {
            --hue:
