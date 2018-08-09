<?php

use Faker\Generator as Faker;

$factory->define(App\Teacher::class, function (Faker $faker) {
    return [
        'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'personal_description' => $faker->sentence,
        'academic_title_1' => $faker->sentence,
        'academic_title_2' => $faker->sentence,
        'academic_title_3' => $faker->sentence,
        'work_experience_1' => $faker->sentence,
        'work_experience_2' => $faker->sentence,
        'work_experience_3' => $faker->sentence,
        'references' => $faker->sentence,
        //Llave foranea
        'id_user' => null ,
    ];

    
});
