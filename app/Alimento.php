<?php

namespace App;

use App\Traits\Catalogable;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Alimento extends Model
{
    use Catalogable, NodeTrait;

    protected $guarded = ['id', 'created_at', 'updated_at', ];
    protected $fillable = ['nombre','cantidad', 'kcal', 'carbohidratos', 'proteinas', 'lipidos','sodio', 'fibra'];

    public function unidad()
    {
        return $this->belongsTo(Unidad::class);
    }

    public function grupoAlimento()
    {
        return $this->belongsTo(GrupoAlimento::class);
    }
}
