<?php

// Решают проблему избыточного потребления памяти

function getValues(): array {
    $arr = [];

    for ($i = 0; $i < 1000000; $i++) {
        $arr[] = $i;
    }

    return $arr;
}

foreach (getValues() as $value) {
    // ...
}

echo memory_get_peak_usage() . PHP_EOL;