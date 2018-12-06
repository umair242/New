<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //
    public function gethomepage(){
      //  echo "my home page function";
        return view ('homepage');
    //dd(config('pages.home'));
      //  return view('home');
    }
        
    }


