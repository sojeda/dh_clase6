<?php

use App\Category;
use App\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) use ($factory)
{
    $user_id = factory(User::class)->create()->id;
    return [
        'category_id' => function () { return factory(Category::class)->create()->id; },
        'created_by' => $user_id,
        'updated_by' => $user_id,
        'tags' => $faker->word . ',' . $faker->word . ',' . $faker->word,
        'brand' => $faker->randomElement(['Apple', 'Microsoft', 'Samsung', 'Lg']),
        'low_stock' => $faker->randomElement([5, 10, 15]),
        'sale_counts'  => $faker->randomNumber(9),
        'view_counts'  => $faker->randomNumber(9),
        'stock' => $faker->numberBetween(20, 50),
        'description' => $faker->text(490),
        'name' => $faker->text(90),
        'cost' => rand(100, 500),
        'price' => rand(500, 1000),        
    ];
});