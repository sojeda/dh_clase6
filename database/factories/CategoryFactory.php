<?php

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) use ($factory)
{
    return [
        'name' => str_limit($faker->sentence, 50),
        'description' => str_limit($faker->paragraph, 90),
        'icon' => $faker->randomElement(['glyphicon glyphicon-facetime-video', 'glyphicon glyphicon-bullhorn', 'glyphicon glyphicon-briefcase']),
    ];
});