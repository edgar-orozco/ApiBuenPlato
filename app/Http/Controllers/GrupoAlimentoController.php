<?php

namespace App\Http\Controllers;


use App\GrupoAlimento;
use Zend\Diactoros\Request;

class GrupoAlimentoController extends Controller
{
    public function all(Request $request){
        return response()->json(GrupoAlimento::all());
    }

    public function find($id)
    {
        return response()->json(GrupoAlimento::find($id));
    }

    public function search($qry)
    {

        return response()->json();
    }
}