<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;

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



Route::get('/',[FrontEndController::class,'index'])->name('home');
Route::get('/about_team',[FrontEndController::class,'aboutTeam'])->name('about.team');
Route::get('/about_history',[FrontEndController::class,'aboutHistory'])->name('about.history');
Route::get('/about_executive',[FrontEndController::class,'aboutExecutive'])->name('about.executive');
Route::get('/contact',[FrontEndController::class,'contact'])->name('contact');
