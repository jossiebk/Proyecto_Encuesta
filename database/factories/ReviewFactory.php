<?php

use Faker\Generator as Faker;

$factory->define(App\Review::class, function (Faker $faker) {
    $teacher = App\Teacher::all()->random();
    return [
        'puntuality' => $faker->numberBetween($min = 1, $max = 5), 
        'knowledge'=> $faker->numberBetween($min = 1, $max = 5),
        'presentation'=> $faker->numberBetween($min = 1, $max = 5),
        'notes'=> $faker->numberBetween($min = 1, $max = 5),
        'assistance'=> $faker->numberBetween($min = 1, $max = 5),
        'comment'=> $faker->sentence,
        'id_user_evaluator' => App\User::all()->random()->id,
        'id_user_evaluated'=> $teacher->user->id,
        'id_course' => App\Course::all()->random()->id,
    ];
});
