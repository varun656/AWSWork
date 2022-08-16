<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/** @var Illuminate\Database\Eloquent\Factories\Factory $factory */

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

$factory->state(User::class, 'super_admin', function ($faker) {
    $user = User::where('email', 'super_admin@gmail.com')->where('user_type', 'super-admin')->get()->toArray();
    if (empty($user)) {
        return [
            'name' => 'Super Admin',
            'email' => 'super_admin@gmail.com',
            'password' => bcrypt('askjeewanjee'),
            'user_type' => 'super-admin',
        ];
    } else {
        return null;
    }

});

$factory->state(User::class, 'admin', function ($faker) {
    $user = User::where('email', 'admin@gmail.com')->where('user_type', 'admin')->get()->toArray();
    if (empty($user)) {
        return [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('askjeewanjee'),
            'user_type' => 'admin',
        ];
    } else {
        return null;
    }

});

$factory->state(User::class, 'agencies', function ($faker) {
    $user = User::where('email', 'agencies@gmail.com')->where('user_type', 'agencies')->get()->toArray();
    if (empty($user)) {
        return [
            'name' => 'Agencies',
            'email' => 'agencies@gmail.com',
            'password' => bcrypt('askjeewanjee'),
            'user_type' => 'agencies',
        ];
    } else {
        return null;
    }

});

$factory->state(User::class, 'agent', function ($faker) {
    $user = User::where('email', 'agent@gmail.com')->where('user_type', 'agent')->get()->toArray();
    if (empty($user)) {
        return [
            'name' => 'Agent',
            'email' => 'agent@gmail.com',
            'password' => bcrypt('askjeewanjee'),
            'user_type' => 'agent',
        ];
    } else {
        return null;
    }

});

$factory->state(User::class, 'visitor', function ($faker) {
    $user = User::where('email', 'visitor@gmail.com')->where('user_type', 'visitor')->get()->toArray();
    if (empty($user)) {
        return [
            'name' => 'Visitor',
            'email' => 'visitor@gmail.com',
            'password' => bcrypt('askjeewanjee'),
            'user_type' => 'visitor',
        ];
    } else {
        return null;
    }

});

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('askjeewanjee'),
        'remember_token' => Str::random(10),
        'user_type' => $faker->randomElement(['super-admin', 'admin', 'agencies', 'agent', 'visitor']),
        'status' => 'P',
    ];
});
