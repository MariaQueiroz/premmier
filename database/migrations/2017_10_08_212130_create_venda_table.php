<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venda', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->string('valor',50);
            $table->string('contrato',50);
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
        Schema::dropIfExists('venda');
    }
}
