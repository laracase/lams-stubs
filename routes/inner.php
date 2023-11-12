<?php

use Illuminate\Support\Facades\Route;
use Lams\Stubs\Controllers\Inner\ConsoleController;

Route::group([
    'middleware' => ['inner'],
    'prefix' => 'inner/stubs',
], function () {
    Route::group([
        'prefix' => 'console',
        'controller' => ConsoleController::class
    ], function () {
        Route::get('', ['uses' => 'index']);
    });
});
