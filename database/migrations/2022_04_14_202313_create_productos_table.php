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
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_producto');
            $table->string('denominacion');
            $table->string('categoria');
            $table->string('inox');
            $table->string('imagen');
            $table->string('material')->nullable();
            $table->string('acabado')->nullable();
            $table->string('rosca')->nullable();
            $table->string('resistencia')->nullable();
            $table->string('tratamiento')->nullable();
            $table->string('sae')->nullable();
            $table->string('zb')->nullable();
            $table->string('zam')->nullable();
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
        Schema::dropIfExists('productos');
    }
};
