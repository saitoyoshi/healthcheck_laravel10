<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\RecordController;
use App\Models\Record;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/record')->name('record.')->controller(RecordController::class)->group(function() {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('', 'store')->name('store');
    Route::get('{record}/edit', 'edit')->name('edit');
    Route::put('{record}', 'update')->name('update');
    Route::delete('{record}', 'destroy')->name('destroy');
});
