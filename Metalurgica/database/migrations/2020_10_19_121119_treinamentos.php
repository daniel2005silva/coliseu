<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Treinamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treinamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fornecedor_id')->unsigned();
            $table->bigInteger('funcionario_id')->unsigned();
            $table->string('treinamento',50);
            $table->string('descricao',100);
            $table->string('conteudo',1000);
            $table->date('dt_inicio');
            $table->date('dt_termino');
            $table->string('tipo',50);
            $table->string('turma',100);
            $table->timestamps();
            $table->foreign('fornecedor_id')->references('id')->on('fornecedors')->onDelete('cascade');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treinamentos');
    }
}
