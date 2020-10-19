<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',50);
            $table->string('sobrenome',100);
            $table->date('dt_nascimento');
            $table->string('estado_civil',50);
            $table->string('nacionalidade',50);
            $table->string('pais_onde_mora',50);
            $table->string('estado_onde_mora',50);
            $table->string('cidade_onde_mora',50);
            $table->string('bairro_onde_mora',50);
            $table->string('rua_onde_mora',50);
            $table->integer('numero_onde_mora');
            $table->string('cargo_ocupado',100);
            $table->string('cargo_desejado',100);
            $table->string('responsabilidades',1000);
            $table->string('formacao_academica',500);
            $table->string('certificados',100);
            $table->string('idiomas',50);
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
        Schema::dropIfExists('funcionarios');
    }
}
