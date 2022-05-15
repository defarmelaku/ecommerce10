<?php

use App\Models\product;
use App\Models\catagory;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatagoryController;
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
Route::get('/product/register', [ProductController::class, 'register'])->name('product/register');
Route::post('/product/register', [ProductController::class, 'store'])->name('product/register');
Route::get('/catagory/register', [CatagoryController::class, 'register'])->name('catagory/register');
Route::post('/catagory/register', [CatagoryController::class, 'store'])->name('catagory/register');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController ::class, 'index'])->name('home');
Route::get('/product/list', [ProductController::class, 'get_all'])->name('product/list');
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/update',[ProductController::class,'update'])->name('product/update');
Route::get('/product/delete/{id}', [ProductController::class, 'delete']);
Route::get('/product/search/{id}', [ProductController::class, 'get_by_id']);
Route::get('/catagory/get_all', [CatagoryController::class, 'get_all'])->name('catagory/get_all');
Route::get('/catagory/get_by_id/{id}', [CatagoryController::class, 'get_by_id']);