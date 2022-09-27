<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VinController;
use App\Models\User;

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

Route::any('/', [VinController::class, 'index'])->middleware('token');
Route::any('/new', [VinController::class, 'newItem']);
Route::any('/confirm', [VinController::class, 'validate_vin']);
Route::any('/fetch', [VinController::class, 'sendToDb']);
Route::any('/list', function () {
    return view('list', ['owners' => \Illuminate\Support\Facades\DB::table('owners')->get()]);
})->name('list');
