<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\FContactController;
use App\Http\Controllers\FHomeController;
use App\Http\Controllers\MyWorkController;
use App\Http\Controllers\SocialMediaController;

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

// Route::get('/', function () {
//     return view('front.layouts.app');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/createAbout', [AboutController::class, 'create'])->name('createAbout');
Route::post('/storeAbout', [AboutController::class, 'store'])->name('storeAbout');
Route::get('/editAbout/{about}', [AboutController::class, 'edit'])->name('editAbout');
Route::put('/updateAbout/{about}', [AboutController::class, 'update'])->name('updateAbout');

Route::get('/createEducation', [EducationController::class, 'create'])->name('createEducation');
Route::post('/storeEducation', [EducationController::class, 'store'])->name('storeEducation');
Route::get('/editEducation/{education}', [EducationController::class, 'edit'])->name('editEducation');
Route::put('/updateEducation/{education}', [EducationController::class, 'update'])->name('updateEducation');

Route::get('/createWork', [WorkController::class, 'create'])->name('createWork');
Route::post('/storeWork', [WorkController::class, 'store'])->name('storeWork');
Route::get('/editWork/{work}', [WorkController::class, 'edit'])->name('editWork');
Route::put('/updateWork/{work}', [WorkController::class, 'update'])->name('updateWork');

Route::get('/createSkill', [SkillController::class, 'create'])->name('createSkill');
Route::post('/storeSkill', [SkillController::class, 'store'])->name('storeSkill');
Route::get('/editSkill/{skill}', [SkillController::class, 'edit'])->name('editSkill');
Route::put('/updateSkill/{skill}', [SkillController::class, 'update'])->name('updateSkill');

Route::get('/createmyWork', [MyWorkController::class, 'create'])->name('createmyWork');
Route::post('/storemyWork', [MyWorkController::class, 'store'])->name('storemyWork');
Route::get('/editmyWork/{myWork}', [MyWorkController::class, 'edit'])->name('editmyWork');
Route::put('/updatemyWork/{myWork}', [MyWorkController::class, 'update'])->name('updatemyWork');

Route::get('/contact', [ContactController::class, 'index'])->name('Contact');
Route::get('/contact/show/{contact}', [ContactController::class, 'show'])->name('showContact');

Route::get('/createSosmed', [SocialMediaController::class, 'create'])->name('createSosmed');
Route::post('/storeSosmed', [SocialMediaController::class, 'store'])->name('storeSosmed');


// Front End

Route::post('/sentMessage', [FContactController::class, 'store'])->name('sentMessage');
Route::get('/{user:username}', [FHomeController::class, 'index'])->name('IndexHome');
Route::get('/', [FHomeController::class, 'index']);

// Route::get('/coba', function () {
//     return view('front.layouts.app');
// });

// Route::get('/loginn', function() {
//     return view('auth.loginn');
// });


// Route::get('/coba', function() {
//     return view('adminPanel.layouts.app');
// });
