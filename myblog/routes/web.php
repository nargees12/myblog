<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AuthController;
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
    return view('frontend.index');
});
Route::get('/blog', function () {
    return view('frontend.blog');
});
Route::get('/login', function () {
    return view('frontend.login');
});
Route::get('/register', function () {
    return view('frontend.register');
});

Route::prefix('admin')->middleware('guest:admin')->name('backend.')->group(function() {

    Route::get('/login', [AuthController::class, 'login_view'])->name('login.view');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

});

Route::prefix('admin')->middleware('auth:admin')->name('backend.')->group(function() {

    Route::get('/', DashboardController::class)->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});
