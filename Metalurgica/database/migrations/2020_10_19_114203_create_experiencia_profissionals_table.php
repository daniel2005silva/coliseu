<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciaProfissionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencia_profissionals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('funcionario_id')->unsigned();
            $table->string('empresa',50);
            $table->string('cargo_ocupado',50);
            $table->bigInteger('ano');
            $table->string('responsabilidades',1000);
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
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
        Schema::dropIfExists('experiencia_profissionals');
    }
}
