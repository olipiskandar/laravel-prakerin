<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Article;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

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

$factory->define(Article::class, function (Faker $faker) {
    $title = $faker->words(3, true);
    $slug = Str::slug($title);
    return [
        'category_id' => random_int(1, 10),
        'headline' => $faker->boolean(),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'title' => $title,
        'slug' => $slug,
        'description' => $faker->realText(),
        'user_id' => random_int(1, 10)
    ];
});
