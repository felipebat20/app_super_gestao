<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresTable extends Migration
{
    public function up()
    {
        Schema::table('fornecedores', function(Blueprint $table) {
            $table->string('site', 150)->after('name')->nullable();
        });
    }

    public function down()
    {
        Schema::table('fornecedores', function(Blueprint $table) {
            $table->dropColumn('site');
        });
    }
}
