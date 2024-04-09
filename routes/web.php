<?php

use Illuminate\Support\Facades\Route;

/*Dashboard*/
Route::get('/', function () {
    $title = "Dashboard";

    return view('dashboard.index', compact('title'));
})->name('dashboard')->middleware('auth');

/*Auth*/
//Login Controller
Route::controller(\App\Http\Controllers\Auth\LoginController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', 'index')->name('login');
        Route::post('login', 'authenticate')->name('authenticate');
    });
    Route::middleware('auth')->group(function () {
        Route::post('logout', 'logout')->name('logout');
    });
});
//Register Controller
Route::controller(\App\Http\Controllers\Auth\RegisterController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('register', 'register')->name('register');
        Route::post('register', 'postRegister')->name('postRegister');
    });
});
