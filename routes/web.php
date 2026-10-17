<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/post/{slug}', [PostController::class, 'singlePost'])->name('singlepost');
Route::get('/category/{category}' ,[PostController::class, 'getByCategory'])->name('category');



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    // Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('/dashboard', [PostController::class, 'dashboard'])->name('dashboard');

    Route::view('forms', 'forms')->name('forms');
    Route::view('cards', 'cards')->name('cards');
    Route::view('charts', 'charts')->name('charts');
    Route::view('buttons', 'buttons')->name('buttons');
    Route::view('modals', 'modals')->name('modals');
    // Route::view('tables', 'tables')->name('tables');
    Route::view('calendar', 'calendar')->name('calendar');



    //posts
    Route::get('/posts', [PostController::class, 'create'])->name('create');
    Route::post('/posts', [PostController::class, 'store'])->name('store');
    Route::get('/tables', [PostController::class, 'show'])->name('tables');
    Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('edit');
    Route::post('/post/{id}/update', [PostController::class, 'update'])->name('update');
    Route::post('/post/{id}/delete', [PostController::class, 'destroy'])->name('delete');

    // Category




});
