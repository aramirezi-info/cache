<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
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
/*
Route::get('/', function () {
    /*$categories = Cache::rememberForever('categories', function () {
        return Category::all();
    });

    return view('product.index', compact('categories'));
})->name('home');*/

ROute::get('/', [HomeController::class, 'index']);

Route::get('categories', [CategoryController::Class, 'index'])->name('categories.index');
Route::get('categories/{category}/edit', [CategoryController::Class, 'edit'])->name('categories.edit');
Route::put('categories/{category}', [CategoryController::Class, 'update'])->name('categories.update');

