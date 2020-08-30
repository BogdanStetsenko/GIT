<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StranicaController extends Controller
{
    
    /*1
    public function Showmenu(){
        return view('shablon',['tittle'=>'pisos']); 
    }
       
      
      public function Showmenu(){
        $data=array('tittle'=>'ABC');
        return view('shablon',$data);
        
      }
    2

    3
    public function Showmenu(){
        
        return view('shablon')->with('tittle','123');
    }
    //4) когда мнного функций 
    public function Showmenu(){
        
      $vid= view('shablon');
      $vid->with('tittle','ABC');
      $vid->with('tittle2','123');
      $vid->with('tittle3','pisos');
      return $vid;
    }*
    5)
    public function Showmenu(){
        $data=array('tittle'=>'ABC','tittle2'=>'PISOS','tittle3'=>'123');
        return view('shablon',$data);
    }
    6)
    public function Showmenu(){
        
        return view('shablon')->withTittle('pisOS');
    }*/


    public function Link(){
        return view('welcome');
    }
    public function showhomepage(){
        
        return view('index');
    }
}
