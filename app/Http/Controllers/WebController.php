<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('web.index');
    }
    public function ShowCarro(){
        return view('client.carro');
    }
    public function ShowPerfil()
    {
        return view('client.perfil');
    }
}
