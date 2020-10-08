<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreinamentosTable extends Migration
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
            $table->string('nome',100);
            $table->string('fornecedor',100);
            $table->string('conteudo',1000);
            $table->date('inicio');
            $table->date('fim');
            $table->string('tipo',50);
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
        Schema::dropIfExists('treinamentos');
    }
}
