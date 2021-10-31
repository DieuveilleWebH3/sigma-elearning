<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;

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

Route::get('/courses', [CourseController::class, 'index'])->name('courseList');


Route::get('category', [CategoryController::class, 'create'])->name('categoryAdd');
Route::post('category/store', [CategoryController::class, 'store'])->name('categoryStore');
Route::delete('category/delete/{id}', [CategoryController::class, 'delete'])->name('categoryDelete');
Route::put('category/{id}/update', [CategoryController::class, 'update'])->name('categoryUpdate');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
