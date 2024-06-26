<?php

use App\Http\Controllers\CatagoryController;
use App\Models\Post;
use App\Models\User;
use App\Models\Catagory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\TodoController;

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

Route::get('/newtodo', function () {
    return view('dashboard.newtodo');
});



Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Abdul DXL Maydiyana",
        "email" => "itsmaydiyana@gmail.com"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/newcat', [CatagoryController::class, 'index']);
Route::post('/catagory', [CatagoryController::class, 'create']);


Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('posts', [PostController::class, 'index']);

Route::get('/catagory/{catagory:slug}', function (Catagory $catagory) {
    return view('posts', [
        "title" => "$catagory->name",
        "posts" => $catagory->posts->load('user', 'catagory'),
    ]);
});



Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', [
        'title' => 'All Posts by ' . $user->name . ' :',
        'posts' => $user->posts->load('catagory', 'user'),
    ]);
});

Route::get('/login', [LoginController::class, 'index'],)->name('login')->middleware('guest');
Route::get('/', [LoginController::class, 'index'],)->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth'],);
Route::post('/logout', [LoginController::class, 'logout'],);

Route::get('/register', [RegisterController::class, 'index'],);
Route::post('/register', [RegisterController::class, 'create'],);

Route::get('/dashboard', function () {
    return view('dashboard.index');
});


Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/todo', TodoController::class);