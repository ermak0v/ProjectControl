<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    $name = $faker->company;
    return [
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'description' => $faker->text(),
        'customer_contacts' => $faker->address(),
        'created_at' => now(),
    ];
});
