<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('politicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ide_cadastro');
            $table->string('cod_orcamento');
            $table->string('condicao');
            $table->string('matricula');
            $table->string('id_parlamentar');
            $table->string('nome');
            $table->string('nome_parlamentar');
            $table->string('url_foto');
            $table->string('sexo');
            $table->string('uf');
            $table->string('partido');
            $table->string('gabinete');
            $table->string('anexo');
            $table->string('fone');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('politicos');
    }
}
