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

$factory->define(DasProject\Entities\Core\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(DasProject\Entities\Core\Client::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'responsible' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'obs' => $faker->sentence,
    ];
});

$factory->define(DasProject\Entities\Core\Project::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->numerify('Project ###'),
        'description' => $faker->sentence,
        'progress' => $faker->numberBetween($min = 0, $max = 100),
        'status' => $faker->randomElement($array = ['a','b','c']),
        'due_date' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
    ];
});