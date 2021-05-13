<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [PagesController::class, 'index'])->name('pages.index');
Route::get('/watch/{id}/{name}', [PagesController::class, 'watch'])->name('pages.watch');
Route::get('/watches', [PagesController::class, 'watches'])->name('pages.watches');
Route::get('/cart', [PagesController::class, 'cart'])->name('pages.cart');
Route::post('/checkout', [PagesController::class, 'checkout'])->name('pages.checkout');

Route::post('/cart/store/{id}', [CartController::class, 'store'])->name('cart.store');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/empty/', [CartController::class, 'empty'])->name('cart.empty');
Route::get('/cart/changeQty/{id}/{newQty}', [CartController::class, 'changeQty'])->name('cart.changeQty');

Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/admin/product/create', [AdminController::class, 'create'])->name('admin.create');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


require __DIR__ . '/auth.php';


