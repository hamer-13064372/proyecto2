<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('cod_prod');
            $table->string('nombre',150);
            $table->integer('precio');
            $table->string('tipo_serv');
            $table->string('stock_min');
            $table->string('stock_max');
            $table->date('fec_venc');

            $table->integer('cant');
            $table->char('edo',1);

            $table->foreignId('id_obs')->constrained('obsequios');
            $table->foreignId('id_cred')->constrained('creditos');


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
        Schema::dropIfExists('productos');
    }
}
