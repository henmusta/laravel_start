<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\Api_UsersController;
use App\Http\Controllers\Api as Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('login/logout', [Api\Api_LoginController::class, 'logout'])->name('logout');
Route::post('login/login', [Api\Api_LoginController::class, 'login'])->name('login');

//users
Route::get('api_users/destroy/{id}', [Api\Api_UsersController::class, 'destroy']);
Route::post('api_users/update', [Api\Api_UsersController::class, 'update'])->name('update');
Route::resource('api_users', Api\Api_UsersController::class);


// Route::get('api_users/{id}/edit', [Api\Api_UsersController::class, 'edit']);

// Route::get('api_settings', [Api\Api_SettingsController::class, 'index'])->name('index');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
