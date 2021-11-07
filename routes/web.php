<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChapterController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [CourseController::class, 'visitor'])->name('courseVisitor');
Route::get('/course/{slug}/detail', [CourseController::class, 'detailVisitor'])->name('courseDetailVisitor');



Route::get('courses', [CourseController::class, 'create'])->name('courses')->middleware('auth');
Route::post('courses/store', [CourseController::class, 'store'])->name('courseStore')->middleware('auth');
Route::get('/courses/{slug}/detail', [CourseController::class, 'detail'])->name('courseDetail')->middleware('auth');
Route::delete('courses/{slug}/delete', [CourseController::class, 'delete'])->name('courseDelete')->middleware('auth');
Route::get('courses/{slug}/update', [CourseController::class, 'showUpdate'])->name('courseShowUpdate')->middleware('auth');
Route::put('courses/{slug}/update_save', [CourseController::class, 'update'])->name('courseUpdate')->middleware('auth');


Route::get('categories', [CategoryController::class, 'create'])->name('categories')->middleware('auth');
Route::post('category/store', [CategoryController::class, 'store'])->name('categoryStore')->middleware('auth');
Route::delete('category/{slug}/delete', [CategoryController::class, 'delete'])->name('categoryDelete')->middleware('auth');
Route::put('category/{slug}/update', [CategoryController::class, 'update'])->name('categoryUpdate')->middleware('auth');



Route::get('chapters', [ChapterController::class, 'index'])->name('chapters')->middleware('auth');
Route::post('courses/{courseSlug}/chapter/store', [ChapterController::class, 'store'])->name('chapterStore')->middleware('auth');
Route::get('/courses/{courseSlug}/{chapterslug}/detail', [ChapterController::class, 'detail'])->name('chapterDetail')->middleware('auth');
Route::delete('courses/{courseSlug}/{chapterslug}/delete', [ChapterController::class, 'delete'])->name('chapterDelete')->middleware('auth');
Route::get('courses/{courseSlug}/{chapterslug}/update', [ChapterController::class, 'showUpdate'])->name('chapterShowUpdate')->middleware('auth');
Route::put('courses/{slug}/{chapterslug}/update_save', [ChapterController::class, 'update'])->name('chapterUpdate')->middleware('auth');



Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
