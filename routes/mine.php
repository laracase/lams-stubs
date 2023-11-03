<?php

use App\stubs\app\Controllers\Mine\ItemController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['client:user'],
    'prefix' => 'mine/stubs',
], function () {
    Route::group([
        'prefix' => 'item',
        'controller' => ItemController::class,
    ], function () {
        Route::get('', ['uses' => 'index']);
        Route::get('/{id}', ['uses' => 'index']);
        Route::post('', ['uses' => 'store']);
        Route::delete('/{id}', ['uses' => 'destroy']);
    });
});
