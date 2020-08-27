<?php

use Illuminate\Database\Seeder;
use App\Produtos;
use App\CategoriaProdutos;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createProducts();
    }

    private function createProducts(){
        $categorias = CategoriaProdutos::all();

        foreach($categorias as $categoria){
            factory(Produtos::class)->create(['categoria_produto_id' => $categoria->id]);
        }
    }
}
