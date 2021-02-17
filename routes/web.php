<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inputController;
use App\Http\Controllers\homeController;
use App\View\Components\AppLayout;
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



Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('home');
    });
    Route::get('/home', [homeController::class, 'index'])->name('home');
    Route::post('input', [inputController::Class,'input_table']);
    Route::get('view/{tag}', [homeController::class,'view'])->name('view');
    Route::post('/addTag', [homeController::class, 'addTag'])->name('addTag');
});
