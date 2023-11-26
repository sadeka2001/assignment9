<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
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

Route::get('/', function () {
    return view('portfolio');
});

Route::get('home', [HomeController::class,'index']);
Route::get('about', [AboutController::class,'index']);
Route::get('project', [ProjectController::class,'index']);
Route::get('resume', [ResumeController::class,'index']);
Route::get('contact', [ContactController::class,'index'])->name('contact.index');
Route::post('contact/store', [ContactController::class,'store'])->name('contact.store');


