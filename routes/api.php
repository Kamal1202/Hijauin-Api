<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/me', [AuthController::class, 'me']); // Untuk info akun di akun.dart
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']); // Untuk logout

?>