<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\CategorieController;

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


// create a store route
Route::post('/livre/store', [LivreController::class, 'store'])->name("store");
Route::get('/create', [LivreController::class, 'create'])->name('create');
Route::get('/categories/{id}/books', [CategorieController::class, 'getBooksByCategory']);
Route::get('/', [LivreController::class, 'index']);
Route::get("/categories/edit/{id}" ,[LivreController::class,"edit"])->name("edit");
Route::put("/categories/{id}" ,[LivreController::class,"update"])->name("update");
Route::delete("/catgories/{id}",[LivreController::class,"destroy"])->name("delete");
