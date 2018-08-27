<?php

use Faker\Generator as Faker;

$factory->define(App\Director::class, function (Faker $faker) {
    return [
        //
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'rating' => $faker->numberBetween(1,10),
    ];
});
