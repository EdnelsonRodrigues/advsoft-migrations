<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvogadoProcessoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advogado_processo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('advogado_id')->unsigned();
            $table->integer('processo_id')->unsigned();

            $table->foreign('advogado_id')
                        ->references('id')
                        ->on('advogados')
                        ->onDelete('cascade');
            $table->foreign('processo_id')
                        ->references('id')
                        ->on('processos')
                        ->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advogado_processo');
    }
}
