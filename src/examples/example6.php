<?php

// Интересные особенности работы генераторов - 2

$a = 0;

function getValues(&$a): Generator {
    echo 'Start' . PHP_EOL;

    for ($i = 0; $i < 3; $i++) {
        $a++;
        yield $i;
    }

    $a++;
}

function multiple(&$a): void {
    $a *= 10;
}

$generator = getValues($a);
$generator->current();
$generator->next();
$generator->current();

multiple($a);

$generator->current();

var_dump($a);