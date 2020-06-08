<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use App\User;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name'  => $faker->lastName,
        'phone'      => $faker->phoneNumber,
        'email'      => $faker->email,
        'address'    => $faker->address,
        // 'user_id' => factory(User::class)
    ];
});
