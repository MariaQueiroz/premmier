<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtendenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',50);
            $table->string('sobrenome',50);
            $table->string('telefone',20);
            $table->string('email',50);
            $table->string('senha',20);


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
        Schema::dropIfExists('atendentes');
    }
}
