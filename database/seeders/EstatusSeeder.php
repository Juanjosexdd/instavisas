<?php

namespace Database\Seeders;

use App\Models\Estatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estatus::create([
            'name' => 'APROBADO',
            'slug' => 'probado'
        ]);
        Estatus::create([
            'name' => 'NEGADO',
            'slug' => 'negado'
        ]);
        Estatus::create([
            'name' => 'NO ENTRA',
            'slug' => 'no-entra'
        ]);
        Estatus::create([
            'name' => 'REPROGRAMAR CITA',
            'slug' => 'reprogramar-cita'
        ]);
        Estatus::create([
            'name' => 'NO PAGO ARANCEL',
            'slug' => 'no-pago-arancel'
        ]);
        Estatus::create([
            'name' => 'SIN ESTADO',
            'slug' => 'sin-estado'
        ]);
    }
}
