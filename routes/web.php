<?php
<<<<<<< HEAD
use App\Http\Controllers\StripeController;
use App\Http\Controllers\ProductsController;
=======

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StripeController;
>>>>>>> 04d1b5c67fe9383007ab6c55dcc03d2474b01969
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/logout', function () {
    session()->forget('user');
    return redirect('login');
});


Route::post("/register", [UserController::class, 'register']);
Route::post("/login", [UserController::class, 'login']);

<<<<<<< HEAD
Route::post('/session', [StripeController::class, 'session']);
=======
Route::post('/session', 'StripeController@session');
>>>>>>> 04d1b5c67fe9383007ab6c55dcc03d2474b01969
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');

Route::get('/', [ProductsController::class, 'index'])->name('index');
Route::get('cart', [ProductsController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [ProductsController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [ProductsController::class, 'remove'])->name('remove_from_cart');
<<<<<<< HEAD
=======




>>>>>>> 04d1b5c67fe9383007ab6c55dcc03d2474b01969
