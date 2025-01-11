<?php

use App\Http\Controllers\SimpleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/index', [SimpleController::class, 'loginShow'])->name('loginShow');
Route::get('/register', [SimpleController::class, 'registerShow'])->name('register.show');
Route::get('/',[SimpleController::class,'index'])->name('index.show');

