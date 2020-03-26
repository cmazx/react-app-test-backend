<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MenuPosition;
use Faker\Generator as Faker;

$factory->define(MenuPosition::class, function (Faker $faker) {
    $pizzaNames = [
        'Margherita', 'Funghi', 'Capricciosa', 'Quattro Stagioni', 'Vegetariana', 'Quattro Formaggi', 'Marinara',
        'Peperoni', 'Napolitana', 'Hawaii', 'Maltija', 'Calzone', 'Rucola', 'Bolognese', 'Meat Feast', 'Kebabpizza',
        'Mexicana'
    ];

    return [
        'name' => $faker->unique()->colorName . $faker->randomElement($pizzaNames),
        'description' => $faker->unique()->text,
        'price' => $faker->randomFloat(2, 0.01, 20),
        'active' => true,
        'menu_category_id' => 1,
        'position' => $faker->unique()->numberBetween(0, 1000),
        'image' => 'pizza' . random_int(0, 2)
    ];
});


