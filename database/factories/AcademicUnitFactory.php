<?php

use Faker\Generator as Faker;

$factory->define(App\AcademicUnit::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
