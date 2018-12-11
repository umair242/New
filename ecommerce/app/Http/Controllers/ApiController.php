<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function index(Request $request) {
        $final_data = array();
        
        $models_config = config('viewmodels');
        
//        die(sha1('$f@H^J(K%GSD$TGRSDSD'));

        if (empty($request->get('api_data'))) {
            $final_data['status'] = 404;
            $final_data['message'] = 'api_data key is missing';
            $final_data['result'] = [];
            $final_data['count'] = '';
            return json_encode($final_data);
        }


        $decodeJson = json_decode($request->get('api_data'));
//        dd($decodeJson);
        if (json_last_error() !== 0) {
            $final_data['status'] = 404;
            $final_data['message'] = 'your json string is not correct';
            $final_data['result'] = [];
            $final_data['count'] = '';
            return json_encode($final_data);
        }

        
        if($decodeJson->api_key != env('API_KEY')){
            $final_data['status'] = 404;
            $final_data['message'] = 'your Api key is not correct';
            $final_data['result'] = [];
            $final_data['count'] = '';
            return json_encode($final_data);
        }
        
        if($decodeJson->api_token != env('API_TOKEN')){
            $final_data['status'] = 404;
            $final_data['message'] = 'your Api token is not correct';
            $final_data['result'] = [];
            $final_data['count'] = '';
            return json_encode($final_data);
        }
        $modelPattern = "/^[a-z]+$/";
        $functionPattern = "/^[a-zA-Z]+$/";
//        dd($decodeJson->m);
//        dd(preg_match($modelPattern, $decodeJson->m));
//        dd($ma);
        if(empty($models_config[$decodeJson->m])){
            $final_data['status'] = 404;
            $final_data['message'] = 'Model name is not correct';
            $final_data['result'] = [];
            $final_data['count'] = '';
            return json_encode($final_data);
        }
        
        
        $modelObj = $models_config[$decodeJson->m];
//        strlen()
        //function_exists() 
        // method_exists
        
        if(!method_exists($modelObj, $decodeJson->f )){
            $final_data['status'] = 404;
            $final_data['message'] = 'Your Function is not correct';
            $final_data['result'] = [];
            $final_data['count'] = '';
            return json_encode($final_data);
        }

        $final_data = call_user_func(array($modelObj, $decodeJson->f), $decodeJson->params);

       return json_encode($final_data);
    }

}
