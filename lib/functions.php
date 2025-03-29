<?php

function getFormattedVariableDump($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}