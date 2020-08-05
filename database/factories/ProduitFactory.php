<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produit;
use Faker\Generator as Faker;

$factory->define(Produit::class, function (Faker $faker) {
    return [
        'categorie_id'=>'1',
        'nom'=>'produit',
        'prix'=>'25000',
        'description'=>$faker->text(200),
    ];
});
