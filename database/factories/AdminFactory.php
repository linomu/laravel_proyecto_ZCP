<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'personal_id'=>rand(1, 1000),
        'name'=>$faker->name,
        'lastname'=>$faker->lastName,
        'email'=>$faker->email,
    ];
});
