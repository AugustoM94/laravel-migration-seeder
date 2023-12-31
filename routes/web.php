<?php

use App\Http\Controllers\TrainController;
use App\Http\Controllers\TrainDepartureController;
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
    return view('home');
});

Route::get('/trains', [TrainController::class, 'index'])->name('trains.index');
Route::get('/trains/leaving', [TrainDepartureController::class, 'index'])->name('leaving.index');
