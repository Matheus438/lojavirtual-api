<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('store', [ProdutosController::class, 'store']);