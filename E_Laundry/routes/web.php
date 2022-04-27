<?php


use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('Home.Home');

});

Route::get('/Login', function () {
    return view('auth.Login');

});

Route::get('/Register', function () {
    return view('auth.Register');

});

Route::post('/Register', [RegisterController::class, 'store']);

Route::post('/Login', [LoginController::class, 'authenticate']);

Route::get('/Dashboard', [DashboardController::class, 'index']);