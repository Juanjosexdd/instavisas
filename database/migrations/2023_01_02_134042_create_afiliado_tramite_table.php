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
        Schema::create('afiliado_tramite', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('afiliado_id');
            $table->unsignedBigInteger('tramite_id');            
            $table->unsignedBigInteger('estatus_id')->nullable();

            $table->foreign('afiliado_id')->references('id')->on('afiliados')->onDelete('cascade')->onUpdate('cascade');            
            $table->foreign('tramite_id')->references('id')->on('tramites')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estatus_id')->references('id')->on('estatuses')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('cliente_tramite');
    }
};
