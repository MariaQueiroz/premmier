<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->string('valor',50);
            $table->string('veiculo_id',50)->unsigned();;
            $table->string('fornecedor_id',50)->unsigned();;
            
            $table->foreign('veiculo_id')->references('id')->on('veiculo');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedor');
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
        Schema::dropIfExists('compras');
    }
}
