<?php

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

Route::get('welcome', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/hello/{nama}/{alamat}', function ($nama, $alamat) {
    return "<h2> hello $nama dari $alamat </h2>";
});


Route::get('/produk/{id}', function ($id) {
    return view('produk/index', ["id" => $id]);
});

use App\http\Controllers\UserController;

Route::get(
    "/user",
    [UserController::class, "index"]
);

Route::get(
    "/user/daftar",
    [UserController::class, "daftar"]
);

Route::post('/user/store', 
[UserController::class, 'store'])->name('user/store');


Route::get('user/form', function () {
    return view('user/form');
});

Route::get('menkes/sehat', function () {
    return view('menkes/sehat');
});



use App\Http\Controllers\TokoController;

Route::prefix("toko")->group(function(){

    Route::get('/', 
    [TokoController::class, 'index']);


    
    Route::get('/detail', 
    [TokoController::class, 'detail']);
    
    Route::get('/profil', 
    [TokoController::class, 'detail']);

    Route::get('/admin', 
    [TokoController::class, 'admin']);

    Route::get('/customer', 
    [TokoController::class, 'customer']);    

});

use App\Http\Controllers\SehatController;

Route::get("menkes", function () {

    return view("sehat");

});