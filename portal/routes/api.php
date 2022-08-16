<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// default name space for all routes is 'App\Http\Controllers\Api'
$api_version = config('api.api_version');

// Route::group(["prefix" => "{$api_version}"], function() {
//     // register auth routes
//     Route::prefix('auth')
//         ->group(base_path('routes/api/auth.php'));
//     // register users routes
//     Route::prefix('users')
//         ->group(base_path('routes/api/users.php'));
//     // register articles routes
//     Route::prefix('articles')
//         ->group(base_path('routes/api/articles.php'));
// });
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

// Route::group(['middleware' => 'api'], function () {
    Route::apiResources([
        'country' => 'CountryController',
        'city' => 'CityController',
        'state' => 'StateController',
        'user' => 'UserController',
        'agent' => 'AgentController',
        'agency' => 'AgencyController',
        'lead' => 'LeadController'
    ]);
// });

    Route::post('cities-by-state-id', 'CityController@citiesByStateId');
    Route::post('logout', 'AuthController@logout');