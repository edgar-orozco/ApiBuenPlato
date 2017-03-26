<?php

use Illuminate\Database\Seeder;

class ClasificacionesFuncionalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            ['nombre'=>'Alimentos plásticos o constructores',
                'descripcion' => 'Sus componentes principales son proteínas de origen animal o vegetal y minerales.',
                'orden' => 1],

            ['nombre'=>'Alimentos energéticos',
                'descripcion' => 'Sus principales componentes son hidratos de carbono y grasas que nos proporcionan energía.',
                'orden' => 2],

            ['nombre'=>'Alimentos reguladores',
                'descripcion' => 'Aportan fundamentalmente vitaminas y minerales. Tienen una acción antioxidante y regulan los procesos metabólicos.',
                'orden' => 3],


        ])->each(function($item){
            \App\ClasificacionFuncional::create($item);
        });

    }
}
