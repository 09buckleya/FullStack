<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PetitionController;
use App\Http\Controllers\HomeController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('view/{id}', [PetitionController::class, 'index']);

Route::view('add', 'addpetition');
Route::post('add', [PetitionController::class, 'addPetition']);
Route::get('list', [PetitionController::class, 'list']);
Route::get('delete/{id}', [PetitionController::class, 'delete']);
Route::get('edit/{id}', [PetitionController::class, 'edit']);
Route::post('edit', [PetitionController::class, 'update']);
Route::get('petition/{id}', [PetitionController::class, 'show']);
Route::get('sign/{id}', [HomeController::class, 'sign']);
