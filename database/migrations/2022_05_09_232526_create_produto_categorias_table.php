<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoCategoriasTable extends Migration
{





    public function up()
    {
        Schema::create('produto_categorias', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
        

            $table->integer('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produtos');
            

            $table->timestamps();
        });
    }




    public function down()
    {
        Schema::dropIfExists('produto_categorias');
    }
}
