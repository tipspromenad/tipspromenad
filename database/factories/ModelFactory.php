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

// $factory->define(App\User::class, function ($faker) {
// 	return [
// 		'name' => $faker->name,
// 		'email' => $faker->email,
// 		'password' => str_random(10),
// 		'remember_token' => str_random(10),
// 	];
// });

$factory->define(App\Question::class, function ($faker) {
    return [
        'name' => $faker->name,
        'question' => $faker->text,
        'answer1' => $faker->sentence(),
        'answerx' => $faker->sentence(),
        'answer2' => $faker->sentence(),
        'correct_answer' => "x",
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
        ];
});

$factory->define(App\Tip::class, function ($faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence(),
        'mobile' => $faker->boolean,
        'mobile_question' => $faker->boolean,
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
        ];
});

$factory->define(App\Tag::class, function ($faker) {
    return [
        'name' => $faker->word,
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
        ];
});


