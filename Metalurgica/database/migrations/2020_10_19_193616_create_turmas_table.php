<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('funcionario_id')->unsigned();
            $table->bigInteger('treinamento_id')->unsigned();
            $table->timestamps();
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            $table->foreign('treinamento_id')->references('id')->on('treinamentos');
            $table->unique(['funcionario_id','treinamento_id'],'ft_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turmas');
    }
}
