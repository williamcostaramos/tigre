<?php

use App\Http\Controllers\TigrinhoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TigrinhoController::class, 'index']);
