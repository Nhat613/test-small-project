<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('test-create', [TestController::class, 'create'])->name('create');
Route::post('test-store', [TestController::class, 'store'])->name('store');
Route::get('test-index', [TestController::class, 'index'])->name('index');
Route::get('test-edit/{id}', [TestController::class, 'edit'])->name('edit');
Route::post('test-update/{id}', [TestController::class, 'update'])->name('update');
Route::get('delete/{id}', [TestController::class, 'delete'])->name('delete');