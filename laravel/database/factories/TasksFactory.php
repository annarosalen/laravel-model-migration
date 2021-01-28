<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tasks;
use Faker\Generator as Faker;

$factory->define(Tasks::class, function (Faker $faker) {
    return [
        
        'name' => ($faker -> firstName()),
        'description' => ($faker -> text()),
        'hours' => ($faker -> randomDigit()),   

    ];
});
