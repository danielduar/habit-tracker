<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $name ="Daniel Landim";
        $habits = ["Nadar","Correr","Viajar","Jogar Videogame"];
        return view('index',[
            'name' => $name,
            'habits' => $habits
        ]);
    }

    public function me()
    {
        return view('portifolio');
    }

    public function my(){
        return view('myllena');
    }
}
