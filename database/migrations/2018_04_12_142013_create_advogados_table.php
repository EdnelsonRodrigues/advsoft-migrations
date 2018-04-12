<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvogadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advogados', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('situacao', ['Ativo', 'Inativo']);
            $table->string('nome', 60);
            $table->string('oab', 10);
            $table->string('celular', 20);
            $table->string('telefone', 15)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('cep', 10);
            $table->string('endereco', 150);
            $table->string('complemento', 100);
            $table->integer('numero')->nullable();
            $table->string('cidade', 100);
            $table->string('bairro', 100)->nullable();
            $table->string('uf', 2);
            $table->text('obs')->nullable();
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
        Schema::dropIfExists('advogados');
    }
}
