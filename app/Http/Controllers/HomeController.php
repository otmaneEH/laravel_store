<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($age){
        $name="otmane";

        return view('/Home')->with(array(
            'name' => $name,
            'age' => $age
            // 'age' =>$age
        ));
    }
}
