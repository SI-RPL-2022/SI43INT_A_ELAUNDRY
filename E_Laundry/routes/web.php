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

Route::get('/Home', function () {
    return view('Home.Home');

});

Route::get('/Login', function () {
    return view('auth.Login');

});

Route::get('/Register', function () {
    return view('auth.Register');

});

Route::get('/service', function () {
    return view('Service.service');

});

Route::get('/form', function () {
    return view('Service.form');

});

Route::get('/shipping', function () {
    return view('Service.shipping');

});

Route::get('/payment', function () {
    return view('Service.payment');

});
Route::get('/order', function () {
    return view('Service.order');

});
Route::get('/invoice', function () {
    return view('Service.invoice');

});
Route::get('/contact', function () {
    return view('Dashboard.contact');

});
Route::get('/DashboardAdmin', function () {
    return view('Dashboard.DashboardAdmin');

});

Route::get('/DashboardUser', function () {
    return view('Dashboard.DashboardUser');

});

Route::get('/feedback', function () {
    return view('Dashboard.feedback');

});
Route::get('/userprofile1', function () {
    return view('Dashboard.userprofile1');

});
Route::get('/userprofile2', function () {
    return view('Dashboard.userprofile2');

});
Route::get('/details', function () {
    return view('Dashboard.details');

});
Route::post('/Register', [RegisterController::class, 'store']);

Route::post('/Login', [LoginController::class, 'authenticate']);

Route::get('/Dashboard', [DashboardController::class, 'index']);