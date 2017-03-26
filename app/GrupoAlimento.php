<?php

namespace App;

use App\Traits\Catalogable;
use Illuminate\Database\Eloquent\Model;

class GrupoAlimento extends Model
{
    use Catalogable;

    public $timestamps = false;
    protected $guarded = ['id',];
    protected $fillable = ['nombre',''];
    public function alimentos()
    {
        return $this->hasMany(Alimento::class);
    }
}
