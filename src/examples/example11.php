<?php

// Запись в yield

function createGenerator(): Generator
{
    $i = 1;
    while ($i > 0) {
        $item = yield;
        echo $item . PHP_EOL;
        $i--;
    }
}

$gen = createGenerator();
$gen->send('test');
echo 'sleep' . PHP_EOL;
$gen->send('test');
echo 'sleep' . PHP_EOL;
$gen->send('test');