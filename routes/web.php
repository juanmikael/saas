<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
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





Route::post('/save',[NewController::class, 'save'])->name('save');
Route::post('/check',[NewController::class, 'check'])->name('check');
Route::get('/logout',[NewController::class, 'logout'])->name('logout');



Route::group(['middleware'=> ['AuthCheck']], function (){

    Route::get('/', [NewController::class, 'login'])->name('/');
    Route::get('/signup', [NewController::class, 'signup'])->name('signup');

    Route::get('/dashboard', [NewController::class, 'dashboard'])->name('dashboard');
});

