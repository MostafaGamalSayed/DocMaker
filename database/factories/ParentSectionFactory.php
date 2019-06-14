<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ParentSection;
use Faker\Generator as Faker;

$factory->define(ParentSection::class, function (Faker $faker) {
  return [
      'title' => $faker->word,
      'description' => $faker->paragraph,
      'user_id' => function(){
        return factory(App\User::class)->create()->id;
      },
      'documentation_id' => 4,
  ];
});
