<?php

use Illuminate\Support\Facades\Route;
use Lams\Stubs\Controllers\Mine\ItemController;

Route::group([
    'middleware' => ['client:user'],
    'prefix' => 'stubs/mine',
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
