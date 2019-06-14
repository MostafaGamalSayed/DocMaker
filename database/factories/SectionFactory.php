<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Section;
use Faker\Generator as Faker;

$factory->define(Section::class, function (Faker $faker) {
  return [
      'title' => $faker->word,
      'user_id' => function(){
        return factory(\App\User::class)->create()->id;
      },
      'Parent_section_id' => function(){
        return factory(\App\ParentSection::class)->create()->id;
      },
  ];
});
