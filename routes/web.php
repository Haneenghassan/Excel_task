<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('import-products',[ProductController::class,'importproducs'])->name()
// ;
Route::get('/',[ProductController::class,'importForm']);
Route::get('products-export',[ProductController::class,'export'])->name('products.export');
Route::Post('products-import',[ProductController::class,'SaveImportFile'])->name('products.import');
