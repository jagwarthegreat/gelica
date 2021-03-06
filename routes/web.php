<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamiliesController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\FinancialsController;
use App\Http\Controllers\ChurchesController;

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

    Route::group(['prefix' => 'churches'], function ($router) {
        Route::get('/', [ChurchesController::class, 'index'])->name('churches');
        Route::post('/store', [ChurchesController::class, 'church_store']);
        Route::get('/{church_id}', [ChurchesController::class, 'church_destroy'])->name('church.destroy');
        Route::get('/edit/{church_id}', [ChurchesController::class, 'church_edit'])->name('church.edit');
        Route::post('/update/{church_id}', [ChurchesController::class, 'church_update'])->name('church.update');
    });
});
