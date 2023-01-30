<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('secret')
        ]);

        $this->call(NacionalidadSeeder::class);
        $this->call(TipoTramiteSeeder::class);
        $this->call(TipoDocumentoSeeder::class);
        $this->call(TramiteSeeder::class);
        $this->call(EstatusSeeder::class);

    }
}
