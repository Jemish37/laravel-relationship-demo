<?php

use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test/one2one', [TestController::class,'one2one']);
Route::get('/test/one2one-reverse', [TestController::class,'one2oneReverse']);
Route::get('/test/one2many', [TestController::class,'one2many']);
Route::get('/test/one2many-reverse', [TestController::class,'one2manyReverse']);
Route::get('/test/many2many', [TestController::class,'many2many']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
