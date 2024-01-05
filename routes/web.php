<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[DisplayController::class,'dashboard'])->name('dashboard');
Route::get('/courses',[DisplayController::class,'courses'])->name('courses');
Route::get('/teachers',[DisplayController::class,'teachers'])->name('teachers');
Route::get('/students',[DisplayController::class,'students'])->name('students');
Route::get('/improvements',[DisplayController::class,'improvements'])->name('improvements');
Route::get('/messages',[DisplayController::class,'messages'])->name('messages');

Route::get('/main',[DisplayController::class,'main'])->name('main');




Route::get('/login',[DisplayController::class,'login'])->name('login');
Route::get('/signup',[DisplayController::class,'signup'])->name('signup');
// Route::get('/',[DisplayController::class,'']);
// Route::get('/',[DisplayController::class,'index']);
// Route::get('/',[DisplayController::class,'index']);
// Route::get('/',[DisplayController::class,'index']);
// Route::get('/',[DisplayController::class,'index']);
// Route::get('/',[DisplayController::class,'index']);