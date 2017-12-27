<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObisposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obispos', function (Blueprint $table) {
            $table->increments('idobispo');
            $table->string('nombre_completo',150);
            $table->year('fecha_inicio');
            $table->year('fecha_fin');
            $table->string('mostrar_acta',300);
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
        Schema::dropIfExists('obispos');
    }
}
