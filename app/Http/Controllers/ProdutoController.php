<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{





    public function index()
    {
        $produtos = Produto::with("categorias")->get();

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
