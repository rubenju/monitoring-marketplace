<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login', [
        'title' => 'Login'
    ]);
});

Route::get('/login', function () {
    return view('auth.login2', [
        'title' => 'Login'
    ]);
});

Route::get('/login3', function () {
    return view('auth.login3', [
        'title' => 'Login'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Dashboard'
    ]);
});

Route::get('/datatable', function () {
    return view('table-datatable-jquery');
});

Route::get('/trace', function () {
    return view('trace', [
        'title' => 'Tools Lacak'
    ]);
});
