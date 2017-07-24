<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id', false, true)->nullable();
            $table->integer('operador_id', false, true)->nullable();
            $table->integer('administrador_id', false, true)->nullable();
            $table->timestamp('fecha_entrega');
            $table->text('observaciones')->nullable();
            $table->integer('estado');
            $table->integer('valor_total');
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
        Schema::dropIfExists('pedidos');
    }
}
