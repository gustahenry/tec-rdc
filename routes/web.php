<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\CalibracaoController;
use Illuminate\Support\Facades\Route;


// Route::get('calibracoes', function () {
//     return view('calibracoes');
// });

Route::get('/', ApiController::class);

Route::get('calibracoes', [CalibracaoController::class, 'show'])->middleware('web');

