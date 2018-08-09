<?php

use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'code' => $faker->postcode,
        'description' => $faker->sentence,
        'id_faculty' => App\Faculty::all()->random()->id,
        'id_school' => App\School::all()->random()->id,
        'id_academic_unit' => App\AcademicUnit::all()->random()->id,
    ];
});
