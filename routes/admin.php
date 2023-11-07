<?php

use Illuminate\Support\Facades\Route;
use Lamo\Stubs\Controllers\Admin\ItemController;

Route::group([
    'middleware' => ['admin'],
    'prefix' => 'admin/stubs',
], function () {
    Route::group([
        'prefix' => 'item',
        'controller' => ItemController::class,
    ], function () {
        Route::get('', ['uses' => 'index']);
        Route::get('/{id}', ['uses' => 'show']);
        Route::post('', ['uses' => 'store']);
        Route::delete('/{id}', ['uses' => 'destroy']);
    });
});
