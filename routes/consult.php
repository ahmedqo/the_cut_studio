<?php

use App\Http\Controllers\ConsultController;
use Illuminate\Support\Facades\Route;


Route::get('/consults/{date}', [ConsultController::class, 'times_action'])->name('views.consults.times');
Route::post('/consults/store', [ConsultController::class, 'store_action'])->name('actions.consults.store');


Route::group(['prefix' => '/admin', 'middleware' => ['auth']], function () {
    Route::get('/consults', [ConsultController::class, 'index_action'])->name('actions.consults.index');
});
