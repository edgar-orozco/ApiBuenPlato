<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasificacionFuncionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasificacion_funcionales', function ($table){
            $table->increments('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('slug')->unique();
            $table->integer('orden')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clasificacion_funcionales');
    }
}
