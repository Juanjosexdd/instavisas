<?php

namespace Database\Seeders;

use App\Models\Tramiteafiliado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TramiteafiliadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tramiteafiliado::create([
            'name'    => 'Visa a USA',
            'slug'      => 'visa-a-usa',
            'costo' => '100'
        ]);
        Tramiteafiliado::create([
            'name'    => 'Visa a Canadá',
            'slug'      => 'visa-a-canada',
            'costo' => '100'
        ]);
        Tramiteafiliado::create([
            'name'    => 'Visa a Australia',
            'slug'      => 'visa-a-australia',
            'costo' => '100'
        ]);
        Tramiteafiliado::create([
            'name'    => 'Visa a Reino Unido',
            'slug'      => 'visa-a-reino-unido',
            'costo' => '100'
        ]);
        Tramiteafiliado::create([
            'name'    => 'Visa a China',
            'slug'      => 'visa-a-china',
            'costo' => '100'
        ]);
        Tramiteafiliado::create([
            'name'    => 'Visa a Japon',
            'slug'      => 'visa-a-japon',
            'costo' => '100'
        ]);

        Tramiteafiliado::create([
            'name'    => 'Visa de turismo',
            'slug'      => 'visa-de-turismo',
            'costo' => '100'
        ]);
        Tramiteafiliado::create([
            'name'    => 'Visa de Trabajo',
            'slug'      => 'visa-de-trabajo',
            'costo' => '100'
        ]);
        Tramiteafiliado::create([
            'name'    => 'Visa de Estudiante',
            'slug'      => 'visa-de-estudiante',
            'costo' => '100'
        ]);
        Tramiteafiliado::create([
            'name'    => 'Visa de Emergencia',
            'slug'      => 'visa-de-emergencia',
            'costo' => '100'
        ]);
        Tramiteafiliado::create([
            'name'    => 'Renovacion de pasaporte americano',
            'slug'      => 'renovacion-de-pasaporte-americano',
            'costo' => '100'
        ]);
        Tramiteafiliado::create([
            'name'    => 'Proceso de residente que retorna',
            'slug'      => 'proceso-de-residente-que-retorna',
            'costo' => '100'
        ]);
        Tramiteafiliado::create([
            'name'    => 'Carta de al comisionado para paz',
            'slug'      => 'carta-de-al-comisionado-para-paz',
            'costo' => '100'
        ]);
        Tramiteafiliado::create([
            'name'    => 'Registro de hijos de ciudadanos americanos',
            'slug'      => 'registro-de-hijos-de-ciudadanos-americanos',
            'costo' => '100'
        ]);
        Tramiteafiliado::create([
            'name'    => 'Social security',
            'slug'      => 'social-security',
            'costo' => '100'
        ]);
        Tramiteafiliado::create([
            'name'    => 'Traduccion oficial',
            'slug'      => 'traduccion-oficial',
            'costo' => '100'
        ]);
        Tramiteafiliado::create([
            'name'    => 'Apostillas ',
            'slug'      => 'apostillas',
            'costo' => '100'
        ]);
        Tramiteafiliado::create([
            'name'    => 'Visa Colombiana ',
            'slug'      => 'visa-colombiana',
            'costo' => '100'
        ]);
    }
}
