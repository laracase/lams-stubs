<?php

use Illuminate\Support\Facades\Route;
use Lamo\Stubs\Controllers\Open\ItemController;

Route::group([
    'prefix' => 'open/stubs',
], function () {
    Route::group([
        'prefix' => 'item',
        'controller' => ItemController::class,
    ], function () {
        Route::get('', ['uses' => 'index']);
        Route::get('/{id}', ['uses' => 'index']);
    });
});
