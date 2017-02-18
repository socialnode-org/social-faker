<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    $name = $faker->name;
    $email = $faker->unique()->safeEmail;
    $username = $faker->unique()->userName;

    return [
        'name' => $name,
        'email' => $email,
        'username' => $username,
        'screenname' => $name,
        'role' => 'member',
        'email_verified_at' => \Carbon\Carbon::now(),
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
