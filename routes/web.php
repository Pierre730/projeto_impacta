<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthController;
use Illuminate\Routing\Route as RoutingRoute;

Route::get('/', [HealthController::class,'index']);

Route::get('/health/create', [HealthController::class,'create'])->middleware('auth');

Route::get('/health/{id}', [HealthController::class,'show']);

Route::post('/health', [HealthController::class,'store']);

Route::get('/dashboard',[HealthController::class,'dashboard'])->middleware('auth');
