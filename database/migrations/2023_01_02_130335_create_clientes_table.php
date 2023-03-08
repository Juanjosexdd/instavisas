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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('slug')->unique();
            $table->string('identification')->unique();
            $table->string('email');
            $table->string('user');
            $table->string('password');
            $table->string('phone');
            $table->string('phone2')->nullable();
            $table->text('observation')->nullable();
            $table->date('cita_cas')->nullable();
            $table->date('cita_embajada')->nullable();
            $table->string('abono')->nullable();
            $table->string('debe')->nullable();
            $table->string('total')->nullable();

            $table->unsignedBigInteger("tipodocumento_id");
            $table->foreign('tipodocumento_id')->references('id')->on('tipodocumentos');

            $table->unsignedBigInteger('tipotramite_id');
            $table->foreign('tipotramite_id')->references('id')->on('tipo_tramites');

            $table->unsignedBigInteger('nacionalidad_id');
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidads');

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
        Schema::dropIfExists('clientes');
    }
};
