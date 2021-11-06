<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChapterController;

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


Route::get('courses', [CourseController::class, 'create'])->name('courses');
Route::post('courses/store', [CourseController::class, 'store'])->name('courseStore')->middleware('auth');
Route::get('/courses/{slug}/detail', [CourseController::class, 'detail'])->name('courseDetail');
Route::delete('courses/{slug}/delete', [CourseController::class, 'delete'])->name('courseDelete');
Route::get('courses/{slug}/update', [CourseController::class, 'showUpdate'])->name('courseShowUpdate');
Route::put('courses/{slug}/update_save', [CourseController::class, 'update'])->name('courseUpdate');


Route::get('categories', [CategoryController::class, 'create'])->name('categories');
Route::post('category/store', [CategoryController::class, 'store'])->name('categoryStore');
Route::delete('category/{slug}/delete', [CategoryController::class, 'delete'])->name('categoryDelete');
Route::put('category/{slug}/update', [CategoryController::class, 'update'])->name('categoryUpdate');



Route::get('chapters', [ChapterController::class, 'index'])->name('chapters');
Route::post('courses/{courseSlug}/chapter/store', [ChapterController::class, 'store'])->name('chapterStore');
Route::get('/courses/{courseSlug}/{chapterslug}/detail', [ChapterController::class, 'detail'])->name('chapterDetail');
Route::delete('courses/{courseSlug}/{chapterslug}/delete', [ChapterController::class, 'delete'])->name('chapterDelete');
Route::get('courses/{courseSlug}/{chapterslug}/update', [ChapterController::class, 'showUpdate'])->name('chapterShowUpdate');
Route::put('courses/{slug}/{chapterslug}/update_save', [ChapterController::class, 'update'])->name('chapterUpdate');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
