<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MenuPositionOption;
use Faker\Generator as Faker;

$factory->define(MenuPositionOption::class, function (Faker $faker) {
    $values = [];
    for ($i = 1; $i < 4; $i++) {
        $values[] = str_pad('L', $i, 'X', STR_PAD_LEFT);
    }

    return [
        'name' => $faker->unique()->colorName . ' size',
        'values' => $values
    ];
});
