<?php

// Как не получится использовать генератор

function getGenerator(): Generator
{
    $x = 5;

    yield $x;
    yield $x;
    yield $x;
}

foreach (getGenerator() as &$value) {
    $value++;
    var_dump(
        $value
    );
}
