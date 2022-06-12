<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $name="otmane";
        $post=[[
            'id'=>1,
            'title'=>'my first post 1',
            'body'=>'this is my first post 1'
        ],
        [
            'id'=>2,
            'title'=>'my first post 2',
            'body'=>'this is my first post 2'
        ],
        [
            'id'=>3,
            'title'=>'my first post 3',
            'body'=>'this is my first post 3'
        ]];

        return view('home')->with(array(
            'name' => $name,
            'post' => $post
            // 'age' =>$age
        ));
    }
}
