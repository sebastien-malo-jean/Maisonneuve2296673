<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SetLocaleController;
use App\Http\Controllers\CommentController;

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

//route de base de l'application
Route::get('/', function () {
    return view('welcome');
});

//routes pour les étudiants
Route::get('/students', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/{student}', [StudentController::class, 'show'])->name('student.show');

// routes pour les users
Route::get('/registration', [UserController::class, 'create'])->name('user.create');
Route::post('/registration', [UserController::class, 'store'])->name('user.store');

// routes pour l'authentification
Route::get('/login', [AuthController::class, 'create'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');

// routes pour la langue
Route::get('/lang/{locale}', [SetLocaleController::class, 'index'])->name('lang');

// middleware pour les routes protégées
Route::middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/edit/user/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/edit/user/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
    Route::post('/articles/{article}/comments', [CommentController::class, 'store'])->name('comments.store');
});