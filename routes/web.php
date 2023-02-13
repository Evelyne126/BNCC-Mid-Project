<?php

use App\Http\Controllers\BookController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ListKaryawanController::class, 'show'])->name('home');

Route::get('/create-list', [ListKaryawanController::class, 'viewcreatelist'])->name('create.view');
Route::post('/create-list-post', [ListKaryawanController::class, 'store'])->name('create.post');

Route::get('/update-list/{id}', [ListKaryawanController::class, 'editView'])->name('update.view');

Route::patch('/update/{$id}', [ListKaryawanController::class, 'edit'])->name('update.list');

//delete
Route::delete('/delete/{id}', [BookController::class, 'destroy'])->name('deletelist');