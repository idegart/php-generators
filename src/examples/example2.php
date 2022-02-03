<?php

// Базовый принцип использования генераторов

function getGenerator(): Generator {
    yield 1;
    yield 2;
    yield [3, 4];

    $x = 5;

    $y = 10;

    yield $x + $y;

    yield static function () {};
    yield new class {};
}

foreach (getGenerator() as $value) {
    var_dump(
        $value
    );
}