<?php


Route::post('/register', 'Api\AuthController@register');
Route::post('/login', 'Api\AuthController@login');


Route::middleware('auth:api')->group( function () {
    Route::apiResource('payments', 'Api\PaymentController');
});
