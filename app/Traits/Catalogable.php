<?php

namespace App\Traits;

trait Catalogable
{
    /**
     * Slugifica el nombre
     * @param $v
     */
    public function setNombreAttribute($v)
    {
        if($v){
            $this->attributes['slug'] = str_slug($v);
            $this->attributes['nombre'] = $v;
        }
    }
}