<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'id'=>rand(1,5000),
        'username'=>$faker->userName,
        'password'=>$faker->password,
        'firstname'=>$faker->firstName,
        'lastname'=>$faker->lastName,
        'email'=>$faker->email,
    ];
});
