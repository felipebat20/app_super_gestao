<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoDetalhesTable extends Migration
{
    public function up()
    {
        Schema::create('produto_detalhes', function (Blueprint $table) {
            //Colunas
            $table->id();

            $table->unsignedBigInteger('produto_id');
            $table->float('length', 8, 2)->nullable();
            $table->float('width', 8, 2)->nullable();
            $table->float('height', 8, 2)->nullable();

            $table->timestamps();

            //Constraints
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
            $table->unique('produto_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('produto_detalhes');
    }
}
