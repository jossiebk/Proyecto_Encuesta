<?php

use Faker\Generator as Faker;

$factory->define(App\Assistant::class, function (Faker $faker) {
    return [
        'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'credits' => $faker->numberBetween($min = 1, $max = 300),
        'personal_description' => $faker->sentence,
        'academic_experience_1' => $faker->sentence,
        'academic_experience_2' => $faker->sentence,
        'academic_experience_3' => $faker->sentence,
        'work_experience_1' => $faker->sentence,
        'work_experience_2' => $faker->sentence,
        'work_experience_3' => $faker->sentence,
        'references' => $faker->sentence,
        //Llave foranea
        'id_user' => null ,
    ];
});
