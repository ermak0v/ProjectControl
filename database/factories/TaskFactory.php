<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    $name = $faker->company;

    return [
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'description' => $faker->text(),
        'user_id' => \App\User::inRandomOrder()->first(),
        'priority_id' => \App\Priority::inRandomOrder()->first(),
        'created_at' => now(),
    ];
});
