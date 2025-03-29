<?php

function renderHeader() {
    $title = "Dragon Quest";
    $description = "Welcome to the world of Dragon Quest!";
    
    echo <<<HTML
    <div>
        <h1>$title</h1>
        <p>$description</p>
    </div>
    HTML;
}