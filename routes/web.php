<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

// {friend} = Paramètre obligatoire
// {friend?} = Paramètre optionnel

Route::get('/fiorella/{friend?}',[HomeController::class, 'friend']); 

// AboutController -> index
Route::get('/a-propos', [AboutController::class, 'index']);

Route::get('/a-propos/{user}', [AboutController::class, 'show']); 


//CRUD Catégories

Route::get('/categories', [CategoryController::class, 'index']);
//Afficher le formulaire
Route::get('/categories/creer',[CategoryController::class, 'create']);
// Traiter le formulaire
Route::post('/categories/creer',[CategoryController::class, 'store']);