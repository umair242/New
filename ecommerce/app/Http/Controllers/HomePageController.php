<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends ViewCompilingController
{
    //
    public function getHomePage(){
      //  dd(strlen('$2y$10$RXHKGIFMPRlzP/Usj/CTMueb1pP4D0asquU0j9Rc8bZjAeE7Gqtjq'));
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

