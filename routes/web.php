<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ContentController;


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




Route::get('/', [ContentController::class ,'index'])->name('accueil');
Route::middleware('auth')->group(function () {
    Route::get('/admin/{id}/edit', [ContentController::class, 'edit'])->name('home');
    Route::put('/admin/{id}', [ContentController::class, 'update'])->name('update');

    // skills routes 
    Route::get('/skills', [ContentController::class,'showSkills'])->name('showskills'); 
    Route::get('/skill/{id}/edit', [ContentController::class, 'editSkills'])->name('skill');
    Route::put('/skill/{id}', [ContentController::class, 'updateSkills'])->name('updateskill');

    // experiences routes 
    Route::get('/experiences', [ContentController::class,'showExperience'])->name('showExperience'); 
    Route::get('/experience/{id}/edit', [ContentController::class, 'editExperience'])->name('experience');
    Route::put('/experience/{id}', [ContentController::class, 'updateExperience'])->name('updateexperience');

    // education routes 
    Route::get('/educations', [ContentController::class,'showEducation'])->name('showEducation'); 
    Route::get('/education/{id}/edit', [ContentController::class, 'editEducation'])->name('education');
    Route::put('/education/{id}', [ContentController::class, 'updateEducation'])->name('updateeducation');



});




// login routes 
Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [SignupController::class, 'signup'])->name('signup.submit');
Route::get('/login', [LoginController::class,'index'])->name('show');
Route::post('/login', [LoginController::class,'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
