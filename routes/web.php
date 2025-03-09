<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthController;



Route::get('/health/welcome', [HealthController::class,'index']);

Route::get('/health/create', [HealthController::class,'create']);


Route::get('/health/contact', [HealthController::class,'contact']);


Route::get('/health/produtos', [HealthController::class,'produtos']);

Route::post('/health', [HealthController::class,'store']);


//Route::get('/produtos_teste/{id?}', function ($id = null) {
    //return view('produtos_teste',['id' => $id]);
//});essa rota permite que o usuario envie um parametro opcionalmente pela query