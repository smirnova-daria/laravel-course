<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\NewsController;
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
	Route::get('/', [NewsController::class, 'index'])->name('list');
	Route::get('/{id}', [NewsController::class, 'show'])->name('one');
});