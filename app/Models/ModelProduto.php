<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProduto extends Model
{
    use HasFactory;

    protected $fillable = [
          'nome',
          'codigo',
          'preco',
          'tipo',
          'linha'
    ];
}