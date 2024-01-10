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
Route::get('/subjects',[DisplayController::class,'subjects'])->name('subjects');
Route::get('/addcourse',[DisplayController::class,'addcourse'])->name('addcourse');
Route::get('/upload-assignments',[DisplayController::class,'upload_assignments'])->name('upload');
Route::get('/report',[DisplayController::class,'report'])->name('report');
Route::get('/batches',[DisplayController::class,'batches'])->name('batches');
Route::get('/all-batches',[DisplayController::class,'allBatches'])->name('allBatches');
Route::get('/msg',[DisplayController::class,'msg'])->name('msg');
Route::get('/reminders',[DisplayController::class,'reminders'])->name('reminders');

Route::get('/index',[DisplayController::class,'index'])->name('index');
Route::get('/batchStudent',[DisplayController::class,'batchStudent'])->name('batchStudent');
Route::get('/single',[DisplayController::class,'single'])->name('single');
Route::get('/subjectList',[DisplayController::class,'subjectList'])->name('subjectList');
Route::get('/assign',[DisplayController::class,'assign'])->name('assign');
Route::get('/syllabus',[DisplayController::class,'syllabus'])->name('syllabus');
Route::get('/reminders',[DisplayController::class,'reminderStudent'])->name('reminders');
Route::get('/attendence',[DisplayController::class,'attendence'])->name('attendence');




Route::get('/login',[DisplayController::class,'login'])->name('login');
Route::get('/signup',[DisplayController::class,'signup'])->name('signup');
// Route::get('/',[DisplayController::class,'']);
// Route::get('/',[DisplayController::class,'index']);
// Route::get('/',[DisplayController::class,'index']);
// Route::get('/',[DisplayController::class,'index']);
// Route::get('/',[DisplayController::class,'index']);
// Route::get('/',[DisplayController::class,'index']);