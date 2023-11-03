<?php

use App\stubs\app\Controllers\Open\ItemController;
use Illuminate\Support\Facades\Route;

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
