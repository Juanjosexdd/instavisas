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
        Schema::create('estatus_tramite', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tramite_id');            
            $table->unsignedBigInteger('estatus_id')->default(1);

            $table->foreign('estatus_id')->references('id')->on('estatuses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tramite_id')->references('id')->on('tramites')->onDelete('cascade')->onUpdate('cascade');

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
