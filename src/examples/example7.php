<?php

// Интересные особенности работы генераторов - 3

function getValues(): Generator {
    yield 1;
    yield 2;
    yield 3;

    return 'hello world';
}

// Что будет когда yield закончится

$generator = getValues();

echo $generator->current() . PHP_EOL;
$generator->next();
echo $generator->current() . PHP_EOL;
$generator->next();
echo $generator->current() . PHP_EOL;
$generator->next();
echo $generator->current() . PHP_EOL;
$generator->next();



// Как получить return

//$generator = getValues();
//
//echo $generator->current() . PHP_EOL;
//$generator->next();
//echo $generator->current() . PHP_EOL;
//$generator->next();
//echo $generator->current() . PHP_EOL;
//$generator->next();
//echo $generator->getReturn() . PHP_EOL;
//$generator->next();



// Как получить return до конца yield

//$generator = getValues();
//
//echo $generator->current() . PHP_EOL;
//$generator->next();
//
//echo $generator->getReturn() . PHP_EOL;
//$generator->next();
//
//echo $generator->current() . PHP_EOL;
//$generator->next();
//echo $generator->current() . PHP_EOL;
//$generator->next();

