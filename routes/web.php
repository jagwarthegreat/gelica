<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamiliesController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\FinancialsController;

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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'families'], function ($router) {
        Route::get('/', [FamiliesController::class, 'index'])->name('families');
    });

    Route::group(['prefix' => 'groups'], function ($router) {
        Route::get('/', [GroupsController::class, 'index'])->name('groups');
    });

    Route::group(['prefix' => 'financials'], function ($router) {
        Route::get('/', [FinancialsController::class, 'index'])->name('financials');
    });
});
