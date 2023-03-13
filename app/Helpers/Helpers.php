<?php

function shared(string $path): string {
    return SITE['url'] . "/shared/" . $path;
}

function css(string $file): string {
    return SITE['url']. "/shared/css/". $file;
}

function js(string $file): string {
    return SITE['url'] . "/shared/js/". $file;
}