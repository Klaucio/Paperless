<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Disciplina::class, function (Faker\Generator $faker) {

    return [
        'designacao' => $faker->unique()->word,
        'abreviatura' => '',
    ];
});
