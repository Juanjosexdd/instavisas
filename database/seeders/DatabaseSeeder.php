<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(NacionalidadSeeder::class);
        $this->call(TipoTramiteSeeder::class);
        $this->call(TipoDocumentoSeeder::class);
        $this->call(TramiteSeeder::class);
        $this->call(EstatusSeeder::class);
         $this->call(RoleSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
