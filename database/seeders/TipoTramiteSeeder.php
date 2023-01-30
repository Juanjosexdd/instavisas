<?php

namespace Database\Seeders;

use App\Models\TipoTramite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoTramiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoTramite::create([
            'name'    => 'Seguimieno',
            'slug'      => 'seguimiento'
        ]);

        TipoTramite::create([
            'name'    => 'Renovacion',
            'slug'      => 'renovacion'
        ]);
        TipoTramite::create([
            'name'    => 'Adelantos',
            'slug'      => 'adelantos'
        ]);
        TipoTramite::create([
            'name'    => 'Prioridad',
            'slug'      => 'adelantos'
        ]);
        TipoTramite::create([
            'name'    => 'Estudiante',
            'slug'      => 'estudiante'
        ]);
        TipoTramite::create([
            'name'    => 'Canadá',
            'slug'      => 'canada'
        ]);
        TipoTramite::create([
            'name'    => 'Cita pasaporte',
            'slug'      => 'cita-pasaporte'
        ]);
    }
}
