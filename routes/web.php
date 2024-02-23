<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    IndexController,
    AssociatesController,
};

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

// Index Page
Route::get('/',[IndexController::class,'index'])
->name('index');

// Associates Pages
Route::get('/associates/index',[AssociatesController::class,'index'])
->name('associates.index');

Route::get('/associates/create',[AssociatesController::class,'create'])
->name('associates.create');

Route::delete('/associates/delete/{id}',[AssociatesController::class,'delete'])
->name('associates.delete');