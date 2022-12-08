<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprador', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_doc');
            $table->string('documento',10)->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo');
            $table->string('telefono',10);
            $table->string('direccion');
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
        Schema::dropIfExists('comprador');
    }
}
