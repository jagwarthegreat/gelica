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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/families', function () {
    return view('families');
})->name('families');

Route::middleware(['auth:sanctum', 'verified'])->get('/families', function () {
    return view('families');
})->name('families');


Route::middleware(['auth:sanctum', 'verified'])->get('/groups', function () {
    return view('groups');
})->name('groups');

Route::middleware(['auth:sanctum', 'verified'])->get('/financial', function () {
    return view('financial');
})->name('financial');
