<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends ViewCompilingController
{
    //
    public function getHomePage(){
      //  echo "my home page function";
       /// return view ('homepage');
   // dd(config('Pages.home'));
     // return view('home');
   // }
    return $this->buildPages('home');  
   }


}
