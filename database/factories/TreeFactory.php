<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tree;
use Faker\Generator as Faker;

$factory->define(Tree::class, function (Faker $faker) {
    return [
        'title' => $faker->realText($maxNbChars = 200),
    ];
});
