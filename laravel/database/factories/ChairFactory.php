<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chair;
use Faker\Generator as Faker;

$factory->define(Chair::class, function (Faker $faker) {
    return [
        
        'factory' => $faker -> company(),
        'color' => $faker -> safeColorName(),
        'leg_count' => $faker -> randomDigit() 


    ];
});
