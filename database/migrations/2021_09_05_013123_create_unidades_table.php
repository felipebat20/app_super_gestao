<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unit', 5);
            $table->string('description', 30);
            $table->timestamps();
        });

        //Adicionar o relacionamento a tabela produtos
        Schema::table('produtos', function(Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        //Adicionar o relacionamento a tabela produto_detalhes
        Schema::table('produto_detalhes', function(Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    public function down()
    {
        //Desfaz o relacionamento com produto_detalhes
        Schema::table('produto_detalhes', function(Blueprint $table) {
            //Dropa a foreign key
            $table->dropForeign('produto_detalhes_unidade_id_foreign');
            //Remove coluna do relacionamento
            $table->dropColumn('unidade_id');
        });

        //Desfaz o relacionamento com a tabela de produtos
        Schema::table('produtos', function(Blueprint $table) {
            $table->dropForeign('produtos_unidade_id_foreign');
            $table->dropColumn('unidade_id');
        });

        Schema::dropIfExists('unidades');
    }
}
