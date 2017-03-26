<?php

use App\ClasificacionFuncional;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UnidadesSeeder::class);
        $this->call(ClasificacionesFuncionalesSeeder::class);
        $this->call(GrupoAlimentoSeeder::class);
    }
}
