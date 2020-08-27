<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;

class ProductsController extends Controller
{

    //works
    public function index(){
        $produtos = Produtos::all()->toArray();

        return view("produtos.index", compact("produtos"));
    }

    //works
    public function show($id){
        $produto = Produtos::findOrFail($id);

        return view("produtos.show", compact("produto"));
    }

    //works
    public function delete($id){
        Produtos::destroy($id);
        
        return redirect()->route('produtosIndex');

        //preferencialmente adicionar mensagem de sucesso
    }

    //todo view
    public function create(){
        return view("produto.create");
    }

    //todo view
    public function update($id, Request $request){

        $request->validate([
            'nome' => 'required',
            'valor' => 'required'
        ]);

        $product = Produtos::find($id);
        $product->nome = $request->get('nome');
        $product->save();

        return redirect()->route('showCategoriaProduto', ['id' => $id]);
    }
}
