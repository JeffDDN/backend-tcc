<?php

namespace App\Http\Controllers\principal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cadastros;

class PrincipalController extends Controller
{
    public function index (){

        $lista_presenca = Cadastros::select();

        return view('lista_presenca', compact('lista_presenca'));
    }
}
