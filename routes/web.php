<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
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

Route::get('/customerdetails', function () {
    return view('customerDetails');
});

Route::post('/customers/store', 'App\Http\Controllers\CustomerController@store');

Route::get('/forgot-password', function () {
    return view('forgot-password');
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/wel', function () {
    return view('wel');
});

Route::get('/trips', 'App\Http\Controllers\TripController@index');
Route::get('/trips/create', 'App\Http\Controllers\TripController@create');
Route::post('/trips/store', 'App\Http\Controllers\TripController@store');
// Route::get('/trip', function () {
//     return view('trip');
// });

Route::get('/test', [TestController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
