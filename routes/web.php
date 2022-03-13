<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DiseasesController;
use App\Http\Controllers\SymptomsController;
use App\Http\Controllers\KnowledgesController;
use App\Http\Controllers\ConsultationsController;

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

// Auth
Route::get('/login',[AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/logout',[AuthController::class, 'logout']);
Route::get('/register',[AuthController::class, 'register'])->middleware('guest');
Route::post('/postlogin',[AuthController::class, 'postlogin']);
Route::post('/postregister',[AuthController::class, 'postregister']);

// Dashboard
Route::get('/dashboard', [ PagesController::class, 'index' ])->middleware('auth');

// Penyakit
Route::get('/admin/penyakit', [DiseasesController::class, 'index'])->middleware('auth', 'admin');
Route::get('/admin/penyakit/create', [DiseasesController::class, 'create'])->middleware('auth', 'admin');
Route::post('/admin/penyakit/store', [DiseasesController::class, 'store'])->middleware('auth', 'admin');
Route::get('/admin/penyakit/{id}/edit', [DiseasesController::class, 'edit'])->middleware('auth', 'admin');
Route::put('/admin/penyakit/{id}', [DiseasesController::class, 'update'])->middleware('auth', 'admin');
Route::get('/admin/penyakit/{id}', [DiseasesController::class, 'destroy'])->middleware('auth', 'admin');

// Gejala
Route::get('/admin/gejala', [SymptomsController::class, 'index'])->middleware('auth', 'admin');
Route::get('/admin/gejala/create', [SymptomsController::class, 'create'])->middleware('auth', 'admin');
Route::post('/admin/gejala/store', [SymptomsController::class, 'store'])->middleware('auth', 'admin');
Route::get('/admin/gejala/{id}/edit', [SymptomsController::class, 'edit'])->middleware('auth', 'admin');
Route::put('/admin/gejala/{id}', [SymptomsController::class, 'update'])->middleware('auth', 'admin');
Route::get('/admin/gejala/{id}', [SymptomsController::class, 'destroy'])->middleware('auth', 'admin');

// Basis Pengetahuan
Route::get('/admin/pengetahuan', [KnowledgesController::class, 'index'])->middleware('auth', 'admin');
Route::get('/admin/pengetahuan/create', [KnowledgesController::class, 'create'])->middleware('auth', 'admin');
Route::post('/admin/pengetahuan/store', [KnowledgesController::class, 'store'])->middleware('auth', 'admin');
Route::get('/pengetahuan/show', [KnowledgesController::class, 'show'])->middleware('auth');
Route::get('/admin/pengetahuan/{id}/edit', [KnowledgesController::class, 'edit'])->middleware('auth', 'admin');
Route::put('/admin/pengetahuan/{id}', [KnowledgesController::class, 'update'])->middleware('auth', 'admin');
Route::get('/admin/pengetahuan/{id}', [KnowledgesController::class, 'destroy'])->middleware('auth', 'admin');


// Konsultasi
Route::get('/konsultasi', [ConsultationsController::class, 'index'])->middleware('auth');
Route::get('/konsultasi/hasil', [ConsultationsController::class, 'result'])->middleware('auth');
Route::post('/konsultasi/diagnosa', [ConsultationsController::class, 'calculate'])->middleware('auth');

