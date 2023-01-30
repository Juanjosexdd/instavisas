<?php

namespace Database\Seeders;

use App\Models\Nacionalidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NacionalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nacionalidad::create([
            'name'    => 'Venezolano',
            'slug'      => 'venezolano',
            'abbreviated' => 'VE'
        ]);

        Nacionalidad::create([
            'name'    => 'Colombiano',
            'slug'      => 'colombiano',
            'abbreviated' => 'CO'
        ]);
    }
}
