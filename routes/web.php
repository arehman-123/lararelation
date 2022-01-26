<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoriesController;

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

Route::prefix('category')->name('category.')->group(function () {

    Route::get('/',[CategoryController::class,'index'])->name('index');
    Route::get('create',[CategoryController::class,'create'])->name('create');
    Route::post('store',[CategoryController::class,'store'])->name('store');

});

Route::prefix('subcategory')->name('subcategory.')->group(function () {

    Route::get('/',[SubcategoriesController::class,'index'])->name('index');
    Route::get('create',[SubcategoriesController::class,'create'])->name('create');
    Route::post('store',[SubcategoriesController::class,'store'])->name('store');

});

