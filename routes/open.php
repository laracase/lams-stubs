<?php

use Illuminate\Support\Facades\Route;
use Lams\Stubs\Controllers\Open\ItemController;

Route::group([
    'prefix' => 'stubs/open',
], function () {
    Route::group([
        'prefix' => 'item',
        'controller' => ItemController::class,
    ], function () {
        Route::get('', ['uses' => 'index']);
        Route::get('/{id}', ['uses' => 'index']);
    });
});
