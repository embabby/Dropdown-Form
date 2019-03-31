<?php

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

// $factory->define(App\User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
//         'remember_token' => str_random(10),
//     ];
// });


//Country Factory
$factory->define(App\Country::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
    ];
});


//City Factory
$factory->define(App\City::class, function ($faker) {
    return [
        'country_id' => function() {
            return factory('App\Country')->create()->id;
        },
        'name' => $faker->city
    ];
});

//Area Factory
$factory->define(App\Area::class, function ($faker) {
    return [
        'city_id' => function() {
            return factory('App\City')->create()->id;
        },
        'name' => $faker->streetName
    ];
});


//Company Factory
$factory->define(App\Company::class, function ($faker) {
    return [
        'area_id' => function() {
            return factory('App\Area')->create()->id;
        },
        'name' => $faker->company
    ];
});



//Brand Factory
$factory->define(App\Brand::class, function ($faker) {
    return [
        'company_id' => function() {
            return factory('App\Company')->create()->id;
        },
        'name' => $faker->companySuffix
    ];
});



//Branch Factory
$factory->define(App\Branch::class, function ($faker) {
    return [
        'brand_id' => function() {
            return factory('App\Brand')->create()->id;
        },
        'name' => $faker->streetName
    ];
});



//Stand Factory
$factory->define(App\Stand::class, function ($faker) {
    return [
        'branch_id' => function() {
            return factory('App\Branch')->create()->id;
        },
        'name' => $faker->name
    ];
});
