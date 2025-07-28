<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Web\Backend\DashboardsController;
use App\Http\Controllers\Web\Backend\AdminsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\JwtVerify;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Route::prefix('kullanici')->group(function () {
    Route::post('/giris-yap',[AdminsController::class,'Login']);
    Route::middleware([JwtVerify::class.':admin'])->post('/ekle',[AdminsController::class,'Add']);
    Route::middleware([JwtVerify::class.':admin'])->post('/guncelle',[AdminsController::class,'Update']);
    Route::middleware([JwtVerify::class.':admin,user'])->post('/profil/guncelle',[AdminsController::class,'ProfilUpdate']);
    Route::middleware([JwtVerify::class.':admin'])->get('/listele',[AdminsController::class,'GetAll']);
    Route::middleware([JwtVerify::class.':admin,user'])->get('/detay',[AdminsController::class,'Get']);
    Route::middleware([JwtVerify::class.':admin'])->post('/detay',[AdminsController::class,'GetById']);
    Route::middleware([JwtVerify::class.':admin'])->post('/sil',[AdminsController::class,'Delete']);
    Route::middleware([JwtVerify::class.':admin,user'])->post('/profil/sifre/guncelle',[AdminsController::class,'PasswordUpdate']);
    Route::middleware([JwtVerify::class.':admin'])->post('/sifre/guncelle',[AdminsController::class,'UserPasswordUpdate']);
});

Route::middleware([JwtVerify::class.':admin,user'])->group(function () {
    Route::controller(DashboardsController::class)->prefix('dashboard')->group(function () {
        Route::get('/listele',[DashboardsController::class,'Dashboard']);
    });
});
*/

Route::prefix('users')->group(function () {
    Route::post('/login', [UserController::class, 'Login']);
    Route::middleware([JwtVerify::class.':admin'])->post('/register', [UserController::class, 'Add']);
});

Route::middleware([JwtVerify::class.':admin'])->prefix('tasks')->group(function () {
    Route::post('/add', [TaskController::class, 'Add']);
    Route::post('/update', [TaskController::class, 'Update']);
    Route::post('/delete', [TaskController::class, 'Delete']);
    Route::get('/list', [TaskController::class, 'GetAll']);
    Route::get('/detail/{id}', [TaskController::class, 'Get']);
});


