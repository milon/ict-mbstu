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

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Alumni::class, function ($faker) {
    return [
        'name'       => $faker->name,
        'student_id' => 'IT'.$faker->numberBetween(10000, 99999),
        'email' => $faker->email,
        'degree' => ['BSc. Engineering', 'MSc. Engineering'][array_rand([0, 1])],
        'passing_year' => $faker->year(),
        'phone' => $faker->phoneNumber(),
        'website' => $faker->url(),
        'description' => $faker->paragraph(5)
    ];
});

$factory->define(App\Models\Course::class, function ($faker) {
    return [
        'code' => 'ICT-'.$faker->numberBetween(100, 999),
        'name' => $faker->sentence(4),
        'semester' => $faker->numberBetween(1, 11),
        'credit' => $faker->numberBetween(1, 4),
        'description' => $faker->paragraph(15)
    ];
});

$factory->define(App\Models\Faculty::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' =>$faker->phoneNumber(),
        'website' => $faker->url(),
        'designation' => $faker->sentence(2),
        'address' => $faker->address,
        'bio' => $faker->paragraph(25),
        'education_leave' => $faker->numberBetween(0, 1)
    ];
});

$factory->define(App\Models\Education::class, function ($faker) {
    return [
        'faculty_id' => $faker->numberBetween(1, 20),
        'name_of_degree' => $faker->sentence(3),
        'institute' => $faker->sentence(6),
        'year' => $faker->year(),
        'remarks' => $faker->paragraph(10)
    ];
});

$factory->define(App\Models\News::class, function ($faker) {
    return [
        'title' => $faker->sentence(10),
        'description' => $faker->paragraph(50),
        'published_at' => $faker->dateTime()
    ];
});

$factory->define(App\Models\ResearchArea::class, function ($faker) {
    return [
        'name' => $faker->sentence(6)
    ];
});

$factory->define(App\Models\ResearchGroup::class, function ($faker) {
    return [
        'name' => $faker->sentence(6),
        'co_ordinator' => $faker->numberBetween(1, 20),
        'description' => $faker->paragraph(50)
    ];
});

$factory->define(App\Models\Publication::class, function ($faker) {
    return [
        'name' => $faker->sentence(6),
        'faculty_id' => $faker->numberBetween(1, 20),
        'description' => $faker->paragraph(50),
        'link' => $faker->url(),
        'year' => $faker->year(),
        'type' => ['journal', 'conference'][$faker->numberBetween(0, 1)]
    ];
});
