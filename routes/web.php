<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomControllers\CustomAuth;
use App\Http\Controllers\UserControllers\AuthController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


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


Route::group(['prefix' => '/admin'], function (){
    Route::get('/AdminLogin',[CustomAuth::class, 'index'])->name('login.form');

    Route::post('/Login',[CustomAuth::class, 'AdminLogin'])->name('Admin.Login');
    
    Route::get('/AdminDashboard',[CustomAuth::class, 'dashboard'])->name('admin.dashboard')->middleware('is_admin');

    Route::get('/Logout',[CustomAuth::class, 'Logout'])->name('Logout');
});

Route::group(['prefix' => '/User'], function (){

    Route::get('/UserLogin',[AuthController::class, 'index'])->name('user.login.form');

    Route::post('/Login',[AuthController::class, 'login'])->name('user.login');

    Route::get('/Signup',function(){
        return view('user.regtister');
    })->name('user.signup.form');

    Route::post('/UserSignup',[AuthController::class, 'user_signup'])->name('signup');


    Route::get('/UserDashboard',[AuthController::class, 'dashboard'])->name('user.dashboard')->middleware('is_customer');

    Route::get('/Logout',[AuthController::class, 'logout'])->name('user.logout');
});




require __DIR__.'/auth.php';
