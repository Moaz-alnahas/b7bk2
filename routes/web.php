<?php

use App\Http\Controllers\ProdcutController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProdcutController::class,'index'])->name('product.index');
Route::post('/product', [ProdcutController::class,'store'])->name('product.store');
