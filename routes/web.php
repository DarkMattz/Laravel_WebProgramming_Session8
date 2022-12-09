<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/', [MahasiswaController::class, 'index'])->name('home');
Route::get('/input', [MahasiswaController::class, 'input'])->name('input');
Route::put('/input', [MahasiswaController::class, 'inputSaved'])->name('input-saved');
Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])->name('edit');
Route::patch('/edit/{id}', [MahasiswaController::class, 'updateEdited'])->name('update-edited');
Route::delete('/delete/{id}', [MahasiswaController::class, 'delete'])->name('delete');
