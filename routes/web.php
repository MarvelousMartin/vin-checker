<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VinController;

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
/*Add Token verification middleware to '/' */
Route::redirect('/', '/new');
Route::any('/new', [VinController::class, 'index']);
Route::any('/fetch', [VinController::class, 'validate_vin'])->name('fetch');
