<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Topic;
use Faker\Generator as Faker;

$factory->define(Topic::class, function (Faker $faker) {
    return [
      'title' => $faker->word,
      'body' => $faker->paragraph,
      'user_id' => function(){
        return factory(\App\User::class)->create()->id;
      },
      'section_id' => function(){
        return factory(\App\Section::class)->create()->id;
      },
    ];
});
