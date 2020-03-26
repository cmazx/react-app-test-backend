<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MenuCategory;
use Faker\Generator as Faker;

$factory->define(MenuCategory::class, function (Faker $faker) {

    return [
        'name' => $faker->colorName . ' ' . $faker->randomElement(['Pizza', 'Drinks', 'Starters', ' Bread', 'Tea']),
        'description' => $faker->text,
        'position' => $faker->unique(false, 100)->numberBetween(0, 127)
    ];
});
