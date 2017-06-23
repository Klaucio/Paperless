<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Instituicao::class, function (Faker\Generator $faker) {

    return [
        'designacao' => $faker->randomElement([
            'Instituto Superior de Relações Internacionais',
            'Instituto Superior Politécnico de Manica',
            'Instituto Superior Politécnico de Gaza',
            'Instituto Superior Politécnico de Gaza',
            'Universidade Eduardo Mondlane',
            'Universidade Pedagógica',
            'Universidade São Tomás de Moçambique',
        ]),
        'abreviatura' => '',
    ];
});
