<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\ModelProduto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function store(ProdutoRequest $request)
    {
        $produto = ModelProduto::create([
            'nome' => $request->nome,
            'codigo' => $request->codigo,
            'preco' => $request->preço,
            'tipo' => $request->tipo,
            'linha' => $request->linha
        ]);

        return response()->json([
            "succes" => true,
            "message" => "Produto cadastrado",
            "data" => $produto
        ], 200);
    }
}
