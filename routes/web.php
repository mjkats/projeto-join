<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriaProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos', [ProductsController::class, 'index'])
    ->name('produtosIndex');

Route::get('produtos/show/{id}', 'ProductsController@show')
    ->name('showProduto');

Route::get('produtos/delete/{id}', 'ProductsController@delete')
    ->name('deleteProduto');

Route::get('produtos/update/{id}', 'ProductsController@update')
    ->name('updateProduto');

Route::get('produtos/create', 'ProductsController@create')
    ->name('createProduto');

Route::get('categoriaProdutos', [CategoriaProductsController::class, 'index'])
    ->name('categoriaProdutosIndex');

Route::get('categoriaProdutos/show/{id}', 'CategoriaProductsController@show')
    ->name('showCategoria');

Route::get('categoriaProdutos/delete/{id}', 'CategoriaProductsController@delete')
    ->name('deleteCategoria');

Route::get('categoriaProdutos/update/{id}', 'CategoriaProductsController@update')
    ->name('updateCategoria');

Route::get('CategoriaProdutos/create', 'CategoriaProductsController@create')
    ->name('createCategoria');

Route::post('CategoriaProdutos/createNewCategoria', 'CategoriaProductsController@createNewCategoria')
    ->name('createNewCategoria');