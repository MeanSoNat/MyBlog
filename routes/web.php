<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
})->middleware('auth');

Route::get('/profile/{id}', function () {
    return view('user.profile');
});

Auth::routes();
Route::get('/edit-profile/{id}', function () {
    return view('form.edit-profile');
});

Route::get('/edit-post/{id}', function () {
    return view('form.edit-post');
});


Route::post('edit-profile/{id}', [App\Http\Controllers\HomeController::class, 'update']);

Route::post('edit-post/{id}', [App\Http\Controllers\HomeController::class, 'getblogs']);

Route::post('delete-post', [App\Http\Controllers\HomeController::class, 'deletepost']);

Route::post('/addpost/{id}', [App\Http\Controllers\HomeController::class, 'addpost']);

Route::post('update-post/', [App\Http\Controllers\HomeController::class, 'updatepost']);

Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blogshow']);
