<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeecontroller;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
    
    Route::('', [App\Http\Controllers\employeecontroller::class, 'index']);
    Route::('employee', [App\Http\Controllers\employeecontroller::class, 'index']);
    Route::('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::('employee', [\App\Http\Controllers\employeecontroller::class, 'index']);
    Route::('employee/create', [App\Http\Controllers\employeecontroller::class, 'create']);
    Route::('employee', [App\Http\Controllers\employeecontroller::class, 'store']);
    // Route::get('', [App\Http\Controllers\employeecontroller::class, 'edit']);
    // Route::put('', [App\Http\Controllers\employeecontroller::class, 'update']);
    // Route::get('employee/{id}/delete', [App\Http\Controllers\employeecontroller::class, 'delete']);

    






    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
