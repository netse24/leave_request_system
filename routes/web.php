<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Authentication

Route::prefix('user')->group(function () {
    Route::get('/', 'UserController@index');
    // Add more user-specific routes here
});

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index');
    // Add more admin-specific routes here
});

Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', 'AdminController@dashboard');
    // Add more admin-specific routes here
});


Route::get('/', function () {
    return view('welcome');
});
