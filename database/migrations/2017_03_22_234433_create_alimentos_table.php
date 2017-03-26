<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Kalnoy\Nestedset\NestedSet;


class CreateAlimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alimentos', function ($table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('slug')->unique();
            $table->integer('grupo_alimento_id')->unsigned();
            $table->foreign('grupo_alimento_id')
                ->references('id')
                ->on('grupo_alimentos')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('cantidad', 10, 2)->nullable();
            $table->integer('unidad_id')->unsigned()->nullable();
            $table->foreign('unidad_id')->references('id')
                ->on('unidades')->
                onDelete('cascade')->onUpdate('cascade');
            $table->decimal('kcal', 10, 2)->nullable();
            $table->decimal('carbohidratos', 10, 2)->nullable();
            $table->decimal('proteinas', 10, 2)->nullable();
            $table->decimal('lipidos', 10, 2)->nullable();
            $table->decimal('sodio', 10, 2)->nullable();
            $table->decimal('fibra', 10, 2)->nullable();

            NestedSet::columns($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alimentos');
    }
}
