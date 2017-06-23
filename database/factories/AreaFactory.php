<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Area::class, function (Faker\Generator $faker) {

    return [
        'designacao' => $faker->unique()->randomElement([
            'Ciências Sociais',
            'Educação',
            'Ciências',
            'Engenharia',
            'Design',
            'Economia',
            'Filosofia',
            'Filosofia',
            'Turismo',
            'Desporto',
            'Arquitectura',

        ]),
    ];
});
