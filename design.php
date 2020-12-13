<?php

use Pelago\Emogrifier\CssInliner;

require 'init.php';

$html = file_get_contents(url('design.html.php'));

echo CssInliner::fromHtml($html)
    ->inlineCss(file_get_contents(__DIR__ . '/css/style.css'))
    ->inlineCss(file_get_contents(__DIR__ . '/css/reset.css'))
    ->render();