<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produtos;

class ProdutosController extends Controller
{
    public function mostrarProdutos()
    {
        $produtos = Produtos::select('nome','preco','descricao','imagem')->get();
        return response()->json($produtos);
    }

    public function mostrarProduto(Request $request)
    {
        $produtos = Produtos::select('nome','preco','descricao','imagem')->where('id',$request->id)->get();
        if(sizeof($produtos)) return response()->json($produtos);
        else return response()->json([
            "Mensagem" => "Produto não encontrado!"
        ]);
    }

    public function cadastrarProduto(Request $request)
    {
        $produto = new Produtos;
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->descricao = $request->descricao;
        $produto->imagem = $request->imagem;
        $produto->save();

        return response()->json([
            "Mensagem" => "Produto cadastrado com sucesso!"
        ]);
    }

    public function editarProduto(Request $request)
    {
        $produto = Produtos::find($request->id);
        if($produto)
        {
            $produto->nome = ($request->nome) ? $request->nome : $produto->nome;
            $produto->preco = ($request->preco ? $request->preco : $produto->preco);
            $produto->descricao = ($request->descricao) ? $request->descricao : $produto->descricao;
            $produto->imagem = ($request->imagem) ? $request->imagem : $produto->imagem;
            $produto->save();
            return response()->json([
                "Mensagem" => "Produto editado!"
            ]);
        }
        else
        {
            return response()->json([
                "Mensagem" => "Produto não encontrado!"
            ]);
        }
    }

    public function deletarProduto(Request $request)
    {
        $produto = Produtos::find($request->id);
        if($produto)
        {
            $produto->delete();
            return response()->json([
                "Mensagem" => "Produto deletado!"
            ]);
        }
        else
        {
            return response()->json([
                "Mensagem" => "Produto não encontrado!"
            ]);
        }
    }
}
