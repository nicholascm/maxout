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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Goal::class, function() {
  return [
    'user_id' => 1,
    'exercise_id' => 1,
    'target_date' => '2017-1-17',
    'reps' => 1,
    'weight' => 300
  ];
});

$factory->defineAs(App\Measurement::class, 'now-date', function() {

  return [
    'goal_id' => 1,
    'completed_date_time' => date('Y-m-d H:i:s'),
    'weight' => 300,
    'reps' => 1
  ];
});

$factory->defineAs(App\Measurement::class, 'early-date', function() {

  return [
    'goal_id' => 1,
    'completed_date_time' => '1915-05-30 19:28:21',
    'weight' => 300,
    'reps' => 1
  ];
});
