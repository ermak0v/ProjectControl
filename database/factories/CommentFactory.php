<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'text' => $faker->realText(512),
        'user_id' => \App\User::inRandomOrder()->first(),
        'created_at' => now(),
    ];
});
