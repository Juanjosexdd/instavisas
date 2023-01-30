<?php

namespace Database\Seeders;

use App\Models\Tipodocumento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipodocumento::create([
            'name'    => 'Venezolano',
            'slug'      => 'venezolano',
            'abreviado' => 'V',
        ]);

        Tipodocumento::create([
            'name'    => 'Extranjero',
            'slug'      => 'extranjero',
            'abreviado' => 'E',
        ]);

        Tipodocumento::create([
            'name'    => 'Rif',
            'slug'      => 'rif',
            'abreviado' => 'R',
        ]);

        Tipodocumento::create([
            'name'    => 'Juridico',
            'slug'      => 'juridico',
            'abreviado' => 'J',
        ]);

        Tipodocumento::create([
            'name'    => 'Gubernamental',
            'slug'      => 'gubernamentañ',
            'abreviado' => 'G',
        ]);
    }
}
