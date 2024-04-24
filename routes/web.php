<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PusherController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/chat', [PusherController::class, 'index'])->middleware('auth');
Route::post('/broadcast',[PusherController::class, 'broadcast']);
Route::post('/receive',  [PusherController::class, 'receive']);

Auth::routes();

