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
    $username = substr($faker->unique()->userName, 0, 10).str_random(4);

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

$factory->define(App\Notice::class, function (Faker\Generator $faker) {
	$user = App\User::whereRole('member')->orderByRaw('rand()')->firstOrFail();
	$tweet = $faker->realText(rand(130,150), rand(1,5));
	return [
		'user_id' => $user->id,
		'username' => $user->username,
		'content' => $tweet,
		'rendered' => $tweet,
		'object_type' => 'http://activitystrea.ms/schema/1.0/post',
		'verb' => 'http://activitystrea.ms/schema/1.0/post',
		'scope' => '0',
		'entities' => '',
	];
});
