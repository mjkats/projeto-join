<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CategoriaProdutos;
use App\Model;
use Faker\Generator as Faker;

$factory->define(CategoriaProdutos::class, function (Faker $faker) {
    return [
        'nome'=> $faker->word
    ];
});
