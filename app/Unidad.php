<?php

namespace App;

use App\Traits\Catalogable;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use Catalogable;
    protected $table = 'unidades';
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['nombre'];

    public function alimentos()
    {
        return $this->hasMany(Alimento::class);
    }

}
