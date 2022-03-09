<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(BookController::class)->group(function(){
    Route::get('/book', 'index')->name('book');
    Route::get('/book-detail/{slug}', 'detail')->name('book.detail');
    Route::get('/book-user/{id}', 'user')->name('book.user');
});

Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/{id}', [CategoryController::class, 'detail'])->name('category.detail');


Route::get('/students', [StudentController::class,'index'])->name('students.index');
Route::get('/students-detail/{id}', [StudentController::class, 'detail'])->name('students.detail');
Route::get('/students/create', [StudentController::class,'create'])->name('students.create');
Route::post('/students/store', [StudentController::class,'store'])->name('students.store');
Route::delete('/students/delete/{user}', [StudentController::class, 'delete'])->name('students.delete');
Route::get('/students/edit/{student}', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/update/{student}', [StudentController::class, 'update'])->name('students.update');
