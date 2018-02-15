<?php

use App\Robot;
use App\Student;
use App\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'photo_path' => $faker->imageUrl(),
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(Robot::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'description' => implode("\r",$faker->paragraphs(3)),
        'photo_path' => $faker->imageUrl(),
        'program_path' => $faker->imageUrl(),
        'model_path' => $faker->imageUrl(),
        'characteristics' => $faker->text,
        'achivments' => $faker->text,
    ];
});

//$factory->define(Student::class, function (Faker $faker) {
//    return [
//        'name' => $faker->name,
//        'password' => $faker->password,
//        'description' => implode("\r",$faker->paragraphs(3)),
//        'photo_path' => $faker->imageUrl()
//    ];
//});
