<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Soil;
use Faker\Generator as Faker;

$factory->define(Soil::class, function (Faker $faker) {
    return [
        'farmer_id'=>'6',
        // 'soil_tester_id'=>'4',
        'ph'=>$faker->numberBetween(0,14),
        'nitrogen'=>$faker->numberBetween(240,4),
        'phosphorus'=>$faker->numberBetween(11,22),
        'potasium'=>$faker->numberBetween(110,280),
        'rainfall'=>$faker->numberBetween(50,250),
        'temprature'=>$faker->numberBetween(200,400),
        'recommended_crop'=>$faker->lexify('A?????'),
        'status'=>'SOIL TESTING DONE',
        'created_at'=>now(),
        'updated_at'=>now(),
    ];
});