<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'titulo' => $faker->name,
        'descripcion' => $faker->paragraph(1),
    ];
});
