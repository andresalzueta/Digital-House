<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        // 'title', 'rating', 'awards', 'release_date', 'length', 'genre_id', 'revenue', 'director_id'
        'title' => $faker->name,
        'rating' => $faker->numberBetween(1,10),
        'awards' => $faker->numberBetween(1,10),
        'length' => $faker->numberBetween(100,300), 
        'genre_id'  => $faker->numberBetween(1,10), 
        'revenue' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
        'director_id' => $faker->numberBetween(1,100),
        'release_date' => $faker->dateTimeBetween(
            $startDate='-2 months',
            $endDate = 'now',
            $timezone = null
        ),
    ];
});
