<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\View;
use App\Http\Controllers\UsersDATA;
use App\Http\Controllers\Blade;
use App\Http\Controllers\Collection;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/vasya', function() {
//     return 'petya';
// });

// Route::get('/', function() {
//     return '!!!';
// });

// Route::get('/',function() {
//     return 'это главная страница';
// });

// Route::get('/test',function(){
//     return 'Hello, Gay!';
// });

// Route::get('/dir/test',function(){
//     return 'Sorry, you not Gay)';
// })->name('yhahaha');

// Route::get('/user/{name}', function ($name) {
// 	return $name;
// });

// Route::get('/user/{surname}/{name}', function ($surname, $name) {
// 	return $surname . ' ' . $name;
// })->whereAlpha('surname','[a-zA-Z]')
// ->whereAlpha('name','[a-zA-Z]');

// Route::get('/city/{city}', function ($city ='Omsk') {
// 	return $city;
// })->whereAlpha('surname','[a-zA-Z]');

// Route::get('/user/{id}', function ($id) {
// 	return $id;
// })->where('id','[0-9]+');

// Route::get('/user/{id}/{name}', function ($id,$name) {
// 	return $id.'<br>'.$name;
// })->where('id','[0-9]+')
// ->whereAlpha('name','[a-zA-Z]');

// Route::get('/posts/{date}',function ($date){
//     return $date;
// });

// Route::get('/posts/{year}/{month}/{day}', function($year,$month,$day){
//     return $year.'-'.$month.'-'.$day;
// })->where('year','[0-9]{1,4}')
// ->where('month','[0-9]{1,2}')
// ->where('day','[0-9]{1,2}');

// Route:: get('/users/{order}', function($order='name'or'surname'or'age'){
//     return 'Hello';
// });

// Route:: get('/city/{name}',function($name){
//     return 'Hello'.' '.$name;
// })->whereAlpha('name','[a-zA-Z]');

// Route::get('/user',[UserController::class,'show']);
// Route::get('/user/all',[UserController::class,'all']);
// Route::get('/user/{name}',[UserController::class,'hello'])->whereAlpha('name','[a-zA-Z]');
// Route::get('/user/{surname}/{name}',[UserController::class,'helloSN'])->whereAlpha('name','[a-zA-Z]');
// Route::get('/user/{name}',[UserController::class,'usercity'])->whereAlpha('name','[a-zA-Z]');

// Route::get('/view',[View::class,'show']);
// Route::get('/view/helloSN',[View::class,'helloSN']);
// Route::get('/users/{name}',[UsersDATA::class,'user']);
// Route::get('/users/{name}',[UsersDATA::class,'user1']);

// Route::get('/blade',[Blade::class,'testBlade']);
// Route::get('/blade/1',[Blade::class,'salary']); 
// Route::get('/blade/css',[Blade::class,'css']);
// Route::get('/blade/input',[Blade::class,'input']);
// Route::get('/blade/P',[Blade::class,'P']);
// Route::get('/blade/data/{text}/{href}',[Blade::class,'link']);
// Route::get('/blade/{day}/{month}/{year}',[Blade::class,'date']);
// Route::get('/blade/workers',[Blade::class,'workers']);
// Route::get('/blade/arr',[Blade::class,'arr']);
// Route::get('/blades/{city}',[Blade::class,'city']);
// Route::get('/bladelocal/{country}/{city}',[Blade::class,'country']);
// Route::get('/bladenew/{year}/{month}/{day}',[Blade::class,'datenew']);
// Route::get('/bladeteg',[Blade::class,'teg']);
// Route::get('/age/{age}',[Blade::class,'age']);
// Route::get('/age2/{age}',[Blade::class,'age2']);
// Route::get('/blade/arr_1',[Blade::class,'arr_1']);
// Route::get('/blade/ulArr',[Blade::class,'ulArr']);
// Route::get('/blade/ulArr_2',[Blade::class,'ulArr_2']);
// Route::get('/blade/ulArr_3',[Blade::class,'ulArr_3']);
// Route::get('/blade/arrKey',[Blade::class,'arrKey']);
// Route::get('/blade/arrData',[Blade::class,'arrData']);