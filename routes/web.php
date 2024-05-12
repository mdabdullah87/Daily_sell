<?php

use App\Http\Controllers\backend\customer\customerController;
use App\Http\Controllers\backend\product\categoryController;
use App\Http\Controllers\backend\product\productController;
use App\Http\Controllers\frontend\homecontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\suplier\suplierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/',[homecontroller::class,'frontend'])->name('frontend.index');


Route::prefix('/dashboard/category')->name('category.')->group(function(){

    Route::get('category',[categoryController::class,'category'])->name('all');


});



Route::prefix('/dashboard/product')->name('product.')->group(function(){

    Route::get('product',[productController::class,'product'])->name('all');

    Route::get('buy',[productController::class,'buy'])->name('buy');

    Route::get('sellproduct',[productController::class,'sellproduct'])->name('sellproduct');

    Route::get('invice',[productController::class,'invice'])->name('invice');


});

Route::prefix('/dashboard')->name('customer.')->group(function(){


    Route::get('customers',[customerController::class,'customers'])->name('customers');


});


Route::prefix('/dashboard')->name('suplier.')->group(function(){


    Route::get('all',[suplierController::class,'suplier'])->name('all');


});



    Route::post('card',[productController::class,'card'])->name('card');
    Route::post('quantity_update',[productController::class,'quantity_update'])->name('quantity_update');
    Route::post('price_update',[productController::class,'price_update'])->name('price_update');
    Route::post('cart_amount',[productController::class,'cart_amount'])->name('cart_amount');
    Route::post('deleteId',[productController::class,'deleteId'])->name('deleteId');
   
    

//End My Route//



Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





