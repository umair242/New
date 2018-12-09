<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends ViewCompilingController
{
    public function getRegistrationPage(){
        //return view ('registration');
        return $this->buildPages('registration'); 
    }

        public function postRegistrationForm(Request $request){
        dd($request->all());
 
}
}