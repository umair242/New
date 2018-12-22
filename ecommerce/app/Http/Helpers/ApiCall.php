<?php

namespace App\Http\Helpers;




class ApiCall {
   
    public function runApiCall($arg){
        
        $apiUrl = url('/api/v1');
        $data = array();
        $data = $arg;
        
        $data['api_key'] = env('API_KEY');
        $data['api_token'] = env('API_TOKEN');
        
        $debug_api =  $apiUrl . '?api_data=' . json_encode($data);
      // dd($debug_api);
        
        $curl = curl_init();
        
        
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $apiUrl,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => array(
           'api_data' => json_encode($data)
            ),
        ]);
        
        $result = curl_exec($curl);
        curl_close($curl);
            
        return json_decode($result); 
    }
}
