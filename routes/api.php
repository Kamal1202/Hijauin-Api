<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\SetoranController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/me', [AuthController::class, 'me']); // Untuk info akun di akun.dart
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']); // Untuk logout
Route::middleware('auth:sanctum')->put('/profile', [AuthController::class, 'updateProfile']); // Untuk update profile
Route::middleware('auth:sanctum')->get('/dashboard', [DashboardController::class, 'index']); // Ini buat Dashboard
Route::middleware('auth:sanctum')->get('/setoran', [SetoranController::class, 'index']); // Dari setorancontroller buat history setoran 

//ambil data artikel
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);

?>