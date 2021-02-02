<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Peripheral;
use Faker\Generator as Faker;

$factory->define(Peripheral::class, function (Faker $faker) {
    return [
        'name' => $faker -> word(),
        'model' => $faker -> ean13(),
        'price' => rand(20, 50),
        'consumption' => rand(20, 50)
    ];
});
