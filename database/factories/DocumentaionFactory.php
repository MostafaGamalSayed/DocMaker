<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Documentaion;
use Faker\Generator as Faker;

$factory->define(Documentaion::class, function (Faker $faker) {
    return [
      'title' => $faker->word,
      'description' => $faker->paragraph,
      'user_id' => function(){
        return factory(\App\User::class)->create()->id;
      },
    
    ];
});
