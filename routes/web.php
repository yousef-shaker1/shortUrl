<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;

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
Route::get('/', [LinkController::class, 'create'])->name('create');
Route::post('/store', [LinkController::class, 'store'])->name('store');
Route::get('/{shortUrl}', [LinkController::class, 'redirect']);
