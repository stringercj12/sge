<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProtocolosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocolos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->text('descricao');
            $table->string('anexo1');
            $table->string('anexo2');
            $table->string('tipo_solicitacao');
            $table->bigInteger('user')->unsigned();
            $table->string('status');
            $table->string('nivel_de_dificuldade');
            $table->date('data_abertura');
            $table->date('data_prevista');
            $table->date('data_fechamento');
            $table->text('resolucao');
            $table->string('anexo_resolucao1');
            $table->string('anexo_resolucao2');
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
        Schema::dropIfExists('protocolos');
    }
}
