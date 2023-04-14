<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index']);

Route::post('/upload_post', [HomeController::class, 'upload']);

Route::get('/view_post', [HomeController::class, 'view_post']);

Route::get('/delete_post/{id}', [HomeController::class, 'delete_post']);

Route::get('/update_post/{id}', [HomeController::class, 'update_post']);

Route::post('/confirm_update/{id}', [HomeController::class, 'confirm_update']);







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
