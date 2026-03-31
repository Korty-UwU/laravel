<?php
namespace App\Http\Controllers;
	class UserController extends Controller
	{
    public function show(){
        return view('post.show',[
            'title'=>'Users',
            'text'=>'page content',
        ]);
    }
		public function all(){
			return 'All';
		}
		public function hello($name){
			return 'Hello'.' '.$name.'</br>';
		}
		public function helloSN($surname,$name){
			return 'Hello'.' '. $surname.' '. $name . '</br>';
		}
		public function usercity($name){
			$users = [
			'Kirill' => 'Omsk',
			'Evgeni' => 'Moskva',
			'Ashot' => 'Tokio',
			'Aleksandirka' => 'Parish',
		    'Dima' => 'Samara',
			];
			return $users[$name] ??'error';
		}
	}

?>
