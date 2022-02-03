<?php

// Как изменить ключ в итерации генератора

function getValues(): Generator {
    for ($i = 0; $i < 5; $i++) {
        yield $i * 5 => $i;
    }
}

$generator = getValues();

foreach ($generator as $key => $value) {
    echo "$key => $value" . PHP_EOL;
}