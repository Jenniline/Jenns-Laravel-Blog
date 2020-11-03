<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;
use App\Post;



$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' => Arr::random(['title1','title2','title3','title4', 'title5']),
        'body' => $faker->paragraph,
    ];
});
