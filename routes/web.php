<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\ConnexionController;



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

Route::get('/', [NavController::class, 'welcome']);

// Route::resource('cars', CarController::class);

Route::get('/search', [CarController::class, 'index']);

Route::post('/search', [CarController::class, 'index']);

Route::get('/faq', [NavController::class, 'faq']);

Route::get('/services', [NavController::class, 'services']);

Route::get('/connexion', [ConnexionController::class, 'connexion'])->middleware('guest')->name('login');

Route::post('/connexion', [ConnexionController::class, 'authenticate'])->middleware('guest');

Route::get('/connectedRoute', [ConnexionController::class, 'connected'])->middleware('auth');

Route::get('/inscription', [ConnexionController::class, 'inscription'])->middleware('guest');

Route::post('/inscription', [ConnexionController::class, 'addUser'])->middleware('guest');

Route::get('/logout', [ConnexionController::class, 'logout'])->middleware('auth');

Route::get('/updateUser/{id}', [ConnexionController::class, 'updateData'])->middleware('auth');

Route::post('/updateUser/{id}', [ConnexionController::class, 'enregistrer'])->middleware('auth');

Route::post('/deleteUser/{id}', [ConnexionController::class, 'supprimer'])->middleware('auth');

Route::get('/addCar', [CarController::class, 'create'])->middleware('auth');
Route::post('/addCar', [CarController::class, 'store'])->middleware('auth');

Route::get('/finCar/{car}', [CarController::class, 'show'])->name('car');

Route::get('/updateCar/{car}', [CarController::class, 'edit'])->middleware('auth');
Route::put('/updateCar/{car}', [CarController::class, 'update'])->middleware('auth');

Route::delete('/deleteCar/{car}', [CarController::class, 'destroy']);

Route::get('/myCars', [CarController::class, 'myCars']);

Route::get('/myCommands', [CommandController::class, 'myCommands']);

Route::get('/reviewCars', [CarController::class, 'reviewCar'])->middleware('admin');

Route::get('/reviewCommands', [CommandController::class, 'reviewCommand'])->middleware('admin');

