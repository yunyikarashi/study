<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('site/index');
});

Route::resource("todos",TodoController::class);
