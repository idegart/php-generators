<?php

// Уменьшение затрат на память

function getValues(): Generator {
    for ($i = 0; $i < 10; $i++) {
        yield $i;
    }
}

foreach (getValues() as $value) {
    // ...
}

echo memory_get_peak_usage() . PHP_EOL;