<?php

use Illuminate\Support\LazyCollection;

require_once '../../vendor/autoload.php';

// "Ленивые коллекции" Laravel

$collection = LazyCollection::make(function () {
    for ($i = 0; $i < 10; $i++) {
        sleep(1);
        yield $i;
    }
});

//$collection->each(fn(int $i) => var_dump($i));

//$collection
//    ->take(3)
//    ->each(fn(int $i) => var_dump($i));

//$collection
//    ->takeUntilTimeout((new DateTime())->add(new DateInterval('PT5S')))
//    ->each(fn(int $i) => var_dump($i));

//$collection = $collection->remember();
//$collection->take(3)->each(fn(int $i) => var_dump($i));
//$collection->take(3)->each(fn(int $i) => var_dump($i));