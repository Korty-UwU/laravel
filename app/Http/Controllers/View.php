<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class View extends Controller
{
    public function show(){
        return view('post.show',[
            'title'=>'Title',
            'text'=>'page content',
        ]);
    }
    public function helloSN(){
        return view('post.showSN',[
            'title'=>'Title',
            'name'=>'Kirill',
            'surname'=>'Kejl',
        ]);
    }
}
