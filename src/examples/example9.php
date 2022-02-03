<?php

// Вызов генератора несколько раз

function getValues(): Generator {
    yield 1;
    yield 2;
    yield 3;
}

$generator = getValues();

foreach ($generator as $item) {
    echo  $item . PHP_EOL;
}

foreach ($generator as $item) {
    echo  $item . PHP_EOL;
}