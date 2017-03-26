<?php

use Illuminate\Database\Seeder;

class GrupoAlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
           ['nombre'=>'Frutas', 'orden' => 1],
           ['nombre'=>'Verduras y Hortalizas', 'orden' => 2],
           ['nombre'=>'Legumbres tubérculos y frutos secos', 'orden' => 3],
           ['nombre'=>'Carnes, huevos y pescados', 'orden' => 4],
           ['nombre'=>'Pan, pastas, dulces y azúcares', 'orden' => 5],
           ['nombre'=>'Aceites y grasas', 'orden' => 6],
           ['nombre'=>'Lácteos', 'orden' => 7],

        ])->each(function($item){
           \App\GrupoAlimento::create($item);
        });
    }
}
