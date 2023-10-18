<?php

use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;


Route::get('/types', [TypeController::class, 'index_view'])->name('views.types.index');
Route::get('/types/store', [TypeController::class, 'store_view'])->name('views.types.store');
Route::get('/types/{id}/patch', [TypeController::class, 'patch_view'])->name('views.types.patch');

Route::post('/types/store', [TypeController::class, 'store_action'])->name('actions.types.store');
Route::post('/types/{id}/patch', [TypeController::class, 'patch_action'])->name('actions.types.patch');
Route::post('/types/{id}/clear', [TypeController::class, 'clear_action'])->name('actions.types.clear');
