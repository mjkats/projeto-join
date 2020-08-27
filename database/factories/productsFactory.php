<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produtos;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Produtos::class, function (Faker $faker) {
    return [
        'nome'=> $faker->word,
        'valor'=> $faker->randomFloat(2, 0, 1000)
    ];
});
