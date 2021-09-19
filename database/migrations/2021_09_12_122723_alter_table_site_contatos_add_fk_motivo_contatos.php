<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterTableSiteContatosAddFkMotivoContatos extends Migration
{
    public function up()
    {
        Schema::table('site_contatos', function(Blueprint $table) {
            $table->unsignedBigInteger('contact_reasons_id');
        });

        DB::statement('update site_contatos set contact_reasons_id = contact_reason');

        Schema::table('site_contatos', function(Blueprint $table) {
            $table->foreign('contact_reasons_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('contact_reason');
        });
    }

    public function down()
    {
        Schema::table('site_contatos', function(Blueprint $table) {
            $table->integer('contact_reason');
            $table->dropForeign('site_contatos_contact_reasons_id_foreign');
        });

        DB::statement('update site_contatos set contact_reason =  contact_reasons_id');

        Schema::table('site_contatos', function(Blueprint $table) {
            $table->dropColumn('contact_reasons_id');
        });
    }
}
