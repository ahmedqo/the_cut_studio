<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::post('/projects/store', [ProjectController::class, 'store_action'])->name('actions.projects.store');

Route::group(['prefix' => '/admin', 'middleware' => ['auth']], function () {
    Route::get('/projects', [ProjectController::class, 'index_view'])->name('views.projects.index');
    Route::post('/projects/{id}/clear', [ProjectController::class, 'clear_action'])->name('actions.projects.clear');
});
