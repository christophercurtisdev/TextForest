<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Branch;
use Faker\Generator as Faker;

$factory->define(Branch::class, function (Faker $faker) {

    $branchCount = count(Branch::all());

    return [
        'body' => $faker->realText($maxNbChars = 200),
        'tree_id' => rand(1, 100),
        'parent_branch_id' => rand($branchCount-99, $branchCount),
    ];
});
