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
    return view('admin.homepage');
});

Route::get('sample', function () {
    return view('admin.user');
});

Route::get('temperature', function () {
    return view('admin.temperature');
});

Route::get('lenght', function () {
    return view('admin.lenght');
});

Route::get('area', function () {
    return view('admin.area');
});

Route::get('speed', function () {
    return view('admin.speed');
});

Route::get('weight', function () {
    return view('admin.weight');
});

Route::get('time', function () {
    return view('admin.time');
});
