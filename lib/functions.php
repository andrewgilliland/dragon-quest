<?php

function dataDump(int|string|array|null $value): void {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($url): string {
    return $_SERVER["REQUEST_URI"] == $url;
}