<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Area::class, function (Faker\Generator $faker) {

    return [
        'designacao' => $faker->unique()->randomElement([
            'Ciências Socias e Aplicadas',
            'Educação',
            'Letras e Artes',
            'Engenharias',
            'Saúde',
            'Design',
            'Economia',
            'Filosofia',
            'Filosofia',
            'Turismo',
            'Desporto',
            'Arquitectura',
            'Ciências Agronómicas',
            'Ciências Biológias',
            'Ciências Humanas',
            'Ciências Naturais e Exactass',

        ]),
    ];
});
