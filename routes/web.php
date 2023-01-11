<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\Welcome\WelcomeController;
use App\Http\Controllers\Categories\CategoriesController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', function(){
    return view('about');
});
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');

Route::group([
	'prefix' => 'admin',
	'as' => 'admin.'
], function () {
	Route::get('/', [IndexController::class, 'index'])->name('index');
	Route::get('/test1', [IndexController::class, 'test1'])->name('test1');
	Route::get('/test2', [IndexController::class, 'test2'])->name('test2');
});


Route::group([
	'prefix' => 'news',
	'as' => 'news.'
], function () {
    Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
    Route::get('/categories/{slug}', [CategoriesController::class, 'show'])->name('categories.show');
	Route::get('/', [NewsController::class, 'index'])->name('index');
	Route::get('/{id}', [NewsController::class, 'show'])->name('show');

});

