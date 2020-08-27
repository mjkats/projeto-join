<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaProdutos;

class CategoriaProductsController extends Controller
{

    //works
    public function index(){
        $categoriaProdutos = CategoriaProdutos::all()->toArray();

        return view("categoriaProdutos.index", compact("categoriaProdutos"));
    }

    //works
    public function show($id){
        $categoriaProduto = CategoriaProdutos::findOrFail($id);

        return view("categoriaProdutos.show", compact("categoriaProduto"));
    }

    //works
    public function delete($id){
        CategoriaProdutos::destroy($id);
        
        return redirect()->route('categoriaProdutosIndex');

        //preferencialmente adicionar mensagem de sucesso
    }

    //todo view
    public function create(){
        return view("categoriaProdutos.create");
    }

    public function createNewCategoria(Request $request){

        dd($request);

        $request->validate([
            'nome' => 'required'
        ]);

        $category->nome = $request->get('nome');
        $category->save();
        
        return redirect()->route('categoriaProdutosIndex');
    }

    //todo view
    public function update($id, Request $request){

        $request->validate([
            'nome' => 'required'
        ]);

        $category = CategoriaProdutos::find($id);
        $category->nome = $request->get('nome');
        $category->save();

        return redirect()->route('showCategoriaProduto', ['id' => $id]);
    }
}