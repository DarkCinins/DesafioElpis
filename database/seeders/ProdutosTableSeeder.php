<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Produtos;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produtos::insert([
            'nome' => 'Leite',
            'preco' => 'R$3,99',
            'descricao' => 'Laticínio',
            'imagem' => 'None',
        ]);

        Produtos::insert([
            'nome' => 'Margarina',
            'preco' => 'R$5,99',
            'descricao' => 'Laticínio',
            'imagem' => 'None',
        ]);

        Produtos::insert([
            'nome' => 'Danone',
            'preco' => 'R$4,99',
            'descricao' => 'Laticínio',
            'imagem' => 'None',
        ]);
    }
}
