<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontController;

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
    return view('pages.welcome');
});

Route::get('/a_propos', function () {
    return view('pages.a_propos');
});

Route::get('/login', [frontController::class, 'login'])->name('login');

Route::get('/blog', [frontController::class, 'blog'])->name("blog");

Route::get('/detail_post/{id}', [frontController::class, 'detailpost'])->name("detail_post");

Route::get('/create_post', function () {
    return view('pages.admin_blog');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
