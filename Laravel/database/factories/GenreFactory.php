<?php

use Faker\Generator as Faker;

$factory->define(App\Genre::class, function (Faker $faker) {
    return [
        // factory criará dados falsos para preencher as tabelas do banco para teste
        'name' => $faker->word,
        'ranking' => $faker->unique()->numberBetween(20,100),
        'active' => $faker->boolean($chanceOfGettingTrue = 80),
    ];
});
