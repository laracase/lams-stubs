<?php

use App\stubs\app\Controllers\Inner\ConsoleController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['inner'],
    'prefix' => 'inner/forum',
], function () {
    Route::group([
        'prefix' => 'console',
        'controller' => ConsoleController::class
    ], function () {
        Route::get('', ['uses' => 'index']);
    });
});
