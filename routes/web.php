<?php

use App\Http\Controllers\Example\AdminController;
use App\Http\Controllers\Example\SuperAdminController;
use App\Http\Controllers\Example\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
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
    return view('welcome');
});
// Route::get('/', function () {
//     return view('beranda', [
//         "title" => "SELAMAT DATANG!!"
//     ]);
// });
Route::get('/mutasi', function () {
    return view('mutasi', [
        "title" => "MUTASI"
    ]);
});
Route::get('/pegawai', function () {
    return view('identitas', [
        "title" => "IDENTITAS"
    ]);
});
Route::get('/pangkat', function () {
    return view('kepangkatan', [
        "title" => "PROMOSI"
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('welcome', WelcomeController::class);

Route::get('super-admin', [SuperAdminController::class, 'index']);

Route::get('admin', [AdminController::class, 'index']);

Route::get('user', [UserController::class, 'index']);
