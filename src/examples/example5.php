<?php

// Интересные особенности работы генераторов - 1

function getValues(): Generator {
    echo 'Start' . PHP_EOL;

    for ($i = 0; $i < 3; $i++) {
        echo "yield: $i" . PHP_EOL;
        yield $i;
    }
}

$generator = getValues();

echo 'Generator created' . PHP_EOL;

echo "i = " . $generator->current() . PHP_EOL;
echo "i = " . $generator->current() . PHP_EOL;

$generator->next();

echo "i = " . $generator->current() . PHP_EOL;

$generator->next();

echo "i = " . $generator->current() . PHP_EOL;

$generator->next();

echo "i = " . $generator->current() . PHP_EOL;
