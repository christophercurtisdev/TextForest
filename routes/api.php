<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Go to routes/api/v1/restricted/api.php for more information

Route::group(['prefix' => 'v1', 'middleware' => {API authorisation middleware}], function () {
    require(__DIR__.'/api/v1/restricted/api.php');
});
*/

Route::group(['prefix' => 'v1'], function () {
    require(__DIR__.'/api/v1/open/api.php');
});