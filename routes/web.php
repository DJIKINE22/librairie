<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes Abo
Route::get('/abonne', [App\Http\Controllers\abonneesController::class,'index']);
Route::post('/abonne/create', [App\Http\Controllers\abonneesController::class,'create'])->name('Abonne.create');
Route::get('/abonne/{id}', [App\Http\Controllers\abonneesController::class,'show'])->name('abo.show');
Route::get('/abonne/edit/{id}', [App\Http\Controllers\abonneesController::class,'edit'])->name('abo.edit2');
Route::patch('/Agents/update/{id}', [App\Http\Controllers\abonneesController::class,'update'])->name('abo.update');


// Routes Fourni
Route::get('/fournisseur', [App\Http\Controllers\fournisseursController::class,'index']);
Route::post('/fournisseur/create', [App\Http\Controllers\fournisseursController::class,'create'])->name('Fournisseur.create');


// Routes Livre
Route::get('/livre', [App\Http\Controllers\livresController::class,'index']);
Route::post('/livre/create', [App\Http\Controllers\livresController::class,'create'])->name('Livre.create');
Route::get('/livre/{id}', [App\Http\Controllers\livresController::class,'show'])->name('livre.show');
Route::get('/livre/edit/{id}', [App\Http\Controllers\livresController::class,'edit'])->name('livre.edit2');
Route::patch('/livre/update/{id}', [App\Http\Controllers\livresController::class,'update'])->name('livre.update');


