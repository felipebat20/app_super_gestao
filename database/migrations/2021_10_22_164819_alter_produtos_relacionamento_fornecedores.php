<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterProdutosRelacionamentoFornecedores extends Migration
{
    public function up()
    {
        Schema::table('produtos', function(Blueprint $table) {
            $fornecedor_id = DB::table('fornecedores')->insertGetId([
                'name' => 'Registro Padrão',
                'site' => 'padrao.com.br',
                'uf' => 'MG',
                'email' => 'defaultregister@gmail.com',
            ]);

            $table->unsignedBigInteger('fornecedor_id')->default($fornecedor_id)->after('id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
        });
    }

    public function down()
    {
        Schema::table('produtos', function(Blueprint $table) {
            $table->dropForeign('produtos_fornecedor_id_foreign');
            $table->dropColumn('fornecedor_id');
        });
    }
}
