<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placa',12);
            $table->string('chassi',20);
            $table->string('renavan',10);
            $table->string('cor',15);
            $table->string('marca',20);
            $table->string('tipo',20);
            $table->string('quantidade_portas',5);
            $table->string('tipo_combustivel',20);
            $table->string('cambio',20);
            $table->string('quilometragem',20);
            $table->double('preco_a_vista',20);
            $table->double('preco_com_troca',20);
            $table->string('ar condicionado',20);
            $table->string('direcao_hidraulica',20);
            $table->string('vidro_eletrico',20);
            $table->string('ar_quente',20);
            $table->string('trava_eletrica',20);
            $table->string('teto_solar',20);
            $table->string('air_bags',20);
            $table->string('abs',20);

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
        Schema::dropIfExists('veiculos');
    }
}
