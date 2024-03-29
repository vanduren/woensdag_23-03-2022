<?php

use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('products', ProductController::class)->middleware(['auth']);
// Route::resource('products', ProductController::class);

require __DIR__.'/auth.php';

route::get('/test', function () {
    // return Product::first()->category()->first()->name;
    // return Category::first()->products;
    // return Product::first()->user;
    return User::first()->products;
});
