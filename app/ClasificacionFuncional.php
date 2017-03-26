<?php

namespace App;

use App\Traits\Catalogable;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class ClasificacionFuncional extends Model
{
    use Catalogable;

    protected $table = 'clasificacion_funcionales';
    public $timestamps = false;
    protected $guarded = ['id', ];
    protected $fillable = ['nombre','descripcion','orden'];



}
