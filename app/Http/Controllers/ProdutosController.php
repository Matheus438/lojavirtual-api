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
            'NomeProduto' => $request->NomeDoProduto,
            'SKU' => $request->SKU,
            'Preço de venda' => $request->PreçoDeVenda,
            'Tipo' => $request->Tipo,
            'Linha do Produto' => $request->LinhaDoProduto
        ]);

        return response()->json([
            "succes" => true,
            "message" => "Produto cadastrado",
            "data" => $produto
        ], 200);
    }
}
