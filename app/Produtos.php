<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Produtos extends Model
{
    protected $fillable = ['nome', 'valor'];

    public static function getAll(){

        $produtos = DB::table('produtos')
            ->join('categoria_produtos', 'categoria_produto_id', '=', 'categoria_produtos.id')
            ->select('categoria_produtos.nome', 'produtos.nome', 'produtos.valor', 'produtos.id')
            ->get()->toArray();

        return $produtos;
    }

    public static function getOne($id){
        $produto = Produtos::findOrFail($id)
            ->join('categoria_produtos', 'categoria_produto_id', '=', 'categoria_produtos.id')
            ->select('categoria_produtos.nome', 'produtos.nome', 'produtos.valor')
            ->get();

        return $produto;
    }
}
