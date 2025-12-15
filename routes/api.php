<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\ArticleController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/me', [AuthController::class, 'me']); // Untuk info akun di akun.dart
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']); // Untuk logout
Route::middleware('auth:sanctum')->put('/profile', [AuthController::class, 'updateProfile']); // Untuk update profile
Route::middleware('auth:sanctum')->get('/dashboard', [DashboardController::class, 'index']); // Ini buat Dashboard

//ambil data artikel
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);

?>