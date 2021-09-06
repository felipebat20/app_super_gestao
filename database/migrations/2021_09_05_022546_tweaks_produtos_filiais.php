<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TweaksProdutosFiliais extends Migration
{
    public function up()
    {
        //Cria tabela filiais
        Schema::create('filiais', function(Blueprint $table) {
            $table->id();
            $table->string('filial', 30);
            $table->timestamps();
        });

        // Cria tabela que faz o relacionamento - produtos_filiais
        Schema::create('produtos_filiais', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            //Passa as colunas que dependem da filial
            $table->float('sell_price', 8, 2)->default(0.01);
            $table->integer('min_stack')->default(1);
            $table->integer('max_stack')->default(1);

            $table->timestamps();

            // Adiciona foreign keys
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });

        //Remove colunas de produtos
        Schema::table('produtos', function(Blueprint $table) {
            $table->dropColumn('sell_price');
            $table->dropColumn('min_stack');
            $table->dropColumn('max_stack');
        });
    }

    public function down()
    {
        Schema::table('produtos', function(Blueprint $table) {
            $table->float('sell_price', 8, 2)->default(0.01);
            $table->integer('min_stack')->default(1);
            $table->integer('max_stack')->default(1);
        });
        Schema::dropIfExists('produtos_filiais');
        Schema::dropIfExists('filiais');
    }
}
