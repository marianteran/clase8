<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        return view('productos.index');
    }

    public function show(){
        return view('productos.show');
    }

    public function create(){
        return view('productos.create');
    }
}
