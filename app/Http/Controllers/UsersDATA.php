<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersDATA extends Controller
{
    public function user($name){
        return view('post.showusers',[
            'title'=>'Kejl Kirill',
            'firstname'=>'Kejl',
            'name'=>'Kirill',
            'surname'=>'Aleksandrovis',
            'age'=>'19',
        ]);      
    }
    public function user1($name){
        return view('post.showusers',[
            'title'=>'Terentyev Arkadi',
            'firstname'=>'Terentyev',
            'name'=>'Arkadi',
            'surname'=>'Romanovis',
            'age'=>'20',
        ]);      
    }
    
}
