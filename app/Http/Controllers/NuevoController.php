<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class NuevoController extends Controller
{
    function datos(){
        $saludo="Hola mundo";
        return view('customer.nuevaVista', compact('saludo'));
    }
}
