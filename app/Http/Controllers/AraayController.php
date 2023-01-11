<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AraayController extends Controller
{
    private $array = [
        'name1' =>'Alaa1' ,
        'name2' =>'Mona1',
        'name3' =>'Mhamd1',
        'name4' =>'Mahmood1',
        'name5' =>'Talab1',
        'name6' =>'Ruba1' ,
        'name7' =>'Naser1'
    ];
    public function showArray(){
        return view('user', ['array'=>$this->array]);
    }

}
