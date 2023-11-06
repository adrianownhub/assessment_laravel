<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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
    return view('login');
});

Route::post('/signup', [CustomAuthController::class, 'customRegistration'])->name('signup.create');
Route::get('/signup', function () { return view('signup'); })->name('signup');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/index', [DashboardController::class, 'index'])->name('index.dashboard');
    Route::get('/load', [DashboardController::class, 'listData'])->name('dashboard.listData');
    Route::post('/upload', [DashboardController::class, 'upload'])->name('file.upload');
    
});


Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
