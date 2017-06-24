<?php

namespace App\Http\Controllers;

use App\Instituicao;
use Illuminate\Http\Request;

class InstituicaoController extends Controller
{


    public function getInstituicoes(){

        $instituicoes = Instituicao::all();

        return response()->json(['instituicoes' => $instituicoes->toArray()]);
    }
}
