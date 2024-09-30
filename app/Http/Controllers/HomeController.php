<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
//tambien podemos darle un nombre como __invoke asi no necesitaremos el metodo esto solo se debe usar cuando un controlador solo tenga un metodo
