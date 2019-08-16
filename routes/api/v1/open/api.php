<?php


Route::group(['namespace' => 'Api', 'prefix' => 'open', 'as' => 'guest.'], function () {
    Route::apiResource('/trees', TreeApiController::class);
    Route::apiResource('/branches', BranchApiController::class);
});