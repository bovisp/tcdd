<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProjectNote;
use Faker\Generator as Faker;

$factory->define(ProjectNote::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence
    ];
});
