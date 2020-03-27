<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->string('sexo');
            $table->string('nascimento');
            $table->string('celular');
            $table->string('residencial');
            $table->string('image', 255)->nullable();
            $table->string('tipoUsuario');
            $table->string('ultimoAcesso')->nullable();;
            $table->string('acesso')->default('0')->nullable(); // [0] => Inativo, [1] => Ativo, [2] => Bloqueado, [3] => Sem permissão
            $table->text('observacao')->nullable();
            $table->string('rua');
            $table->string('numero');
            $table->string('complemento')->nullable();
            $table->string('cep');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
