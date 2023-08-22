<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('store', [ProdutosController::class, 'store']);
//teste metodo find
Route::get('/find/{id', [ProdutosController::class, 'pesquisarPorId']);