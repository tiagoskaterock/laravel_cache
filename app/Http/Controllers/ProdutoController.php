<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Support\Facades\Cache;

class ProdutoController extends Controller
{





    public function index()
    {

        $expiracao = 1; // em minutos 

        $produtos = Cache::remember('todosprodutos', $expiracao, function() {
            info('passei por aqui');
            return Produto::with("categorias")->get();            
        });

        // $produtos = Produto::all();


        return view('index', [
            'produtos' => $produtos
        ]);
    }







    public function create()
    {
        //
    }






    public function store(Request $request)
    {
        //
    }







    public function show($id)
    {
        //
    }







    public function edit($id)
    {
        //
    }







    public function update(Request $request, $id)
    {
        //
    }








    public function destroy($id)
    {
        //
    }
}
