<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{






    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nome');
            $table->float('preco');
            $table->timestamps();
        });
    }





    public function down()
    {
        Schema::dropIfExists('produtos');
    }





}
