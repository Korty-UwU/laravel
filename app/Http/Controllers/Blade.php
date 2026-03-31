<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class Blade extends Controller
{
    public function testBlade()
    {
        return view('post.showBlad', [
            'title' => 'BLADE',
            'arr' => [1, 2],
        ]);
    }
    public function salary()
    {
        return view('post.show', [
            'title' => 'Salary',
            'name' => 'Danil',
            'surname' => 'Aleksandrovis',
            'age' => '12',
            'salary' => '120000',
        ]);
    }
    public function css()
    {
        return view('post.showBaldeCss', [
            'cssClass' => 'green',
        ]);
    }
    public function input()
    {
        return view('post.showBaldeCss', [
            'cssClass' => 'green',
            'name' => 'name',
            'surname' => 'surname',
            'age' => 'age',
        ]);
    }
    public function P()
    {
        return view('post.showP', [
            'cssClass' => 'red',
        ]);
    }
    public function link($text, $href)
    {
        return view('post.showLink', [
            'arr' => [$text, $href],
        ]);
    }
    public function date($day, $month, $year)
    {
        return view('post.showDate', [
            'arr' => [$day, $month, $year],
        ]);
    }
    public function workers()
    {
        return view('post.showWorker', [
            'worker1' => ['name' => 'Kirill', 'age' => '19', 'salary' => '9 000 000$',]
        ]);
    }
    public function arr()
    {
        return view('post.showArr', [
            'num' => [1, 2, 3, 4, 5, 6, 8, 9, 10],
        ]);
    }
    public function city($city)
    {
        $city = 'Moskva';
        return view('post.showCity', [
            'city' => $city,
        ]);
    }
    public function country($country, $city)
    {
        $country = 'Russia';
        $city = 'Moskva';
        return view('post.showCountry', [
            'location' => [
                'country' => $country,
                'city' => $city,
            ]
        ]);
    }
    public function datenew($year, $month, $day)
    {
        $year = 'текущий год';
        $month = 'текущий месяц';
        $day = 'текущий день';
        return view('post.showDatenew', [
            'arr' => [$year, $month, $day],
        ]);
    }
    public function teg()
    {
        $htmlStr = '<b>text</b>';
        return view('post.showTeg', [
            'text' => $htmlStr,
        ]);
    }
    public function age($age)
    {
        return view('post.showAge', [
            'age' => $age,
            'text' => 'You Best!',
            'text1' => 'Норм',
            'text2' => 'You LOSER!!!!!'
        ]);
    }
    public function age2($age)
    {
        return view('post.showAge2', [
            'age' => $age,
            'text0' =>'Совершенно летний',
            'text1'=>'Несовершенно летний'
        ]);
    }
    public function arr_1(){
        return view('post.showArr_1',[
            'arr' => [-2, 4, 4, 2, 1],
        ]);
    }
    public function ulArr(){
        return view('post.showulArr',[
            'arr' => [-2, 4, 4, 2, 1],
        ]);
    }
    public function ulArr_2(){
        return view('post.showulArr_2',[
            'arr' => [-2, 4, 4, 2, 1],
        ]);
    }
    public function ulArr_3(){
        return view('post.showulArr_3',[
            'arr' => [-2, 4, 4, 2, 1],
        ]);
    }
    public function arrKey(){
        $arr = [
			'Kirill' => 'Omsk',
			'Evgeni' => 'Moskva',
			'Ashot' => 'Tokio',
			'Aleksandirka' => 'Parish',
		    'Dima' => 'Samara',
			];
        return view('post.showarrKey',['arr'=>$arr]);
    }
    public function arrData(){
        return view('post.showarrData',[
            'arr' => [1,2,3,4,5,6],
        ]);
    }
}
