<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

/*
    $table->string('cover_photo')->nullable();
    $table->string('title');
    $table->string('sub_title');
    $table->string('description');
    $table->unsignedBigInteger('author_id');
    $table->dateTimeTz('date_published');
    $table->unsignedTinyInteger('status');
 * */
$factory->define(Article::class, function (Faker $faker) {
    return [
        'cover_photo' => $faker->imageUrl(292, 164, 'dogs', true, 'Faker', true),
        'title' => $faker->sentence(6, true),
        'sub_title' => $faker->text(100),
        'description' => $faker->paragraph(5, true),
        'date_published' => \Carbon\Carbon::now(),
        'author_id' => 1,
    ];
});
