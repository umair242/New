<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends ViewCompilingController
{
    public function getHomePage(){
        
        return $this->buildPages('admin');
    }
    
    
    
}
