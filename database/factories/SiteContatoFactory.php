<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SiteContato;
use Faker\Generator as Faker;

$factory->define(SiteContato::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'email' => $faker->unique->email(),
        'telefone' => $faker->e164PhoneNumber(),
        'contact_reason' => $faker->numberBetween(1, 3),
        'message' => $faker->text(200),
    ];
});
