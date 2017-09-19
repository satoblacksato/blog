<?php

use Faker\Generator as Faker;

$factory->define(App\Core\Entities\Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->company,
        'description'=>$faker->address
    ];
});
