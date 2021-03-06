<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AddressController;

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

// Register & Login
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


// Protected (login and use the Bearer token)
Route::group(['middleware' => ['auth:sanctum']], function () {

    // Logout remove the token
    Route::post('/logout', [AuthController::class, 'logout']);

    // Only index to returns all addresses
    Route::apiResource('address', AddressController::class)->only('index');

    // ADMIN only routes
    Route::apiResource('address', AddressController::class)->only('store', 'update', 'destroy')->middleware('is_admin');
});
