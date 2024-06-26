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
        Schema::create('cliente_tramite', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('tramite_id');            
            $table->unsignedBigInteger('estatus_id')->default(1);

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');            
            $table->foreign('estatus_id')->references('id')->on('estatuses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tramite_id')->references('id')->on('tramites')->onDelete('cascade')->onUpdate('cascade');

            $table->string('tuto')->default(1);

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
