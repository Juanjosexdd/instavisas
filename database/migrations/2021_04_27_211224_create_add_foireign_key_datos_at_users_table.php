<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddFoireignKeyDatosAtUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('slug')->after('name');
            $table->string("cedula")->unique()->after('slug')->nullable();
            $table->string("last_name")->after('name')->nullable();
            $table->string("username")->after('name')->nullable();
            $table->string("address")->after('last_name')->nullable();
            $table->string("phone")->after('address')->nullable();
            $table->string("phone2")->after('phone')->nullable();
            $table->boolean('estatus')->default(1)->after('phone2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_foireign_key_datos_at_users');
    }
}
