<?php

use Illuminate\Support\Facades\Route;

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
    return redirect(route("dashboard"));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/countries',
    App\Http\Controllers\CountryController::class);

Route::resource('/distilleries',
    App\Http\Controllers\DistilleryController::class);

Route::resource('/gins',
    App\Http\Controllers\GinController::class);

require __DIR__ . '/auth.php';
