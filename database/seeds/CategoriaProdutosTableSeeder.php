<?php

use Illuminate\Database\Seeder;
use App\CategoriaProdutos;

class CategoriaProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCategoriaProducts();
    }

    private function createCategoriaProducts(){
        for($i = 0; $i <= 10; $i++)
            factory(CategoriaProdutos::class)->create();
    }
}
