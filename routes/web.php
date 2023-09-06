<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [PostController::class, 'home']);
Route::get('/about', [PostController::class, 'about']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', [PostController::class, 'categories']);
// Route::get('/categories/{category:slug}',[PostController::class, 'category']);
// Route::get('/authors/{author:username}', [PostController::class, 'author']);

// name('login') berfungsi menamai route. ketika user mencoba mengakses halaman yang private (misal dashboard namun blm login), akan diredirect ke view login (app/Http/middleware/Authenticate.php)
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
} )->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// show tidak bisa diakses, karena tidak dipakai
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');   // Otorisasi dengan middleware (didefinisikan di route)
// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');   // Otorisasi dengan gate (didefinisikan di controller)

// Middleware lebih mudah, namun kurang fleksibel (tidak bisa digunakan di view)
// Gate lebih fleksibel, dapat digunakan di view