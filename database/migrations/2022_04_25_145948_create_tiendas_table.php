<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_tienda');
            $table->string('telefono');
            $table->string('celular');
            $table->string('whatsapp');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('correo_electronico')->nullable();
            $table->string('encargado')->nullable();
            $table->string('imagen')->nullable();
            $table->string('tipo')->nullable();
            $table->longText('latitud')->nullable();
            $table->longText('longitud')->nullable();
            
            $table->softDeletes();
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
        Schema::dropIfExists('tiendas');
    }
};
