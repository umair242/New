<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends ViewCompilingController
{
    //
    public function getHomePage(){
      return $this->buildPages('home');  
    
    }
              public function getContactPage(){
                return $this->buildPages('Contact_us'); 
   }
                public function getNewsPage(){
                return $this->buildPages('news'); 
   }
               public function getDeliveryPage(){
                return $this->buildPages('delivery'); 
   }
               public function getAboutPage(){
                return $this->buildPages('about'); 
   }
               
                
}

