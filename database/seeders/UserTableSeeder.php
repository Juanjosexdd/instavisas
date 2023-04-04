<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Departamento;
use App\Models\Cargo;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cedula' => '123456789',
            'name' => 'Admin',
            'username' => 'admin',
            'slug' => 'admin',
            'last_name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => 'Jose2023**',
            'tipodocumento_id' => 1
        ])->assignRole('ADMINISTRADOR');

    }
}
