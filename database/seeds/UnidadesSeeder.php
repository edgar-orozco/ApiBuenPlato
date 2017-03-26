<?php

use App\Unidad;
use Illuminate\Database\Seeder;

class UnidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            ['nombre'=>'Gramos'],
            ['nombre'=>'Kilos'],
            ['nombre'=>'Taza'],
            ['nombre'=>'Cucharadita'],
            ['nombre'=>'Cuchara'],
            ['nombre'=>'Pieza'],
            ['nombre'=>'Rociada'],
        ])->each(function($item){
           Unidad::create($item);
        });
    }
}
