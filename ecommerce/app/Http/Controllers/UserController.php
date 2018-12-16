<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Image;
use App\Http\Helpers\ApiCall;
use App\Http\Models\User;

class UserController extends ViewCompilingController
{
//    public $name = 'sad';
    public function getRegistrationPage(Request $request){
//        dd($request->all());
        
        $coutry_list = array(
            'Pakistan',
            'India',
            'Kenya',
            'China',
            'Iran',
        );
        
        $this->viewData['country_list'] = $coutry_list;
        return $this->buildPages('registration');
    }
    public function postRegistrationForm(Request $request){
//        dd($_POST);
        
        $apiData = array();
        
        $rules  = [
            'name' => 'required|min:3|max:10',
            'user_name' => 'required|alpha_num|min:3|max:10',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'retype_password' => 'required|same:password',
            'gender' => 'required|min:4',   
            'dob' => 'required|date',   
            'country' => 'required',   
            'image' => 'mimes:jpg,jpeg,png',   
        ];
        
        $messages = [
            'name.min' => '3 char req',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        
        
        
        // check pending on fail case
//       dd($validator->fail());
        
        $image = $request->file('image');
        
        
        $image_process = Image::make($request->file('image'));
        
        $filename = $request->get('user_name') . '.' . $image->getClientOriginalExtension();
        
        
        if(!is_dir(public_path('/users'))){
            mkdir(public_path('/users'));
        }
        
        if(!is_dir(public_path('/users/'.$request->get('user_name')))){
            mkdir(public_path('/users/'.$request->get('user_name')));
        }
        
        $user_uploading_path = public_path('/users/'.$request->get('user_name'));

        $watermark = Image::make(public_path('/images/tag.png'));
        $image_process->resize(200, 100);
        
        $image_process->insert($watermark, 'center');

        
        
        $image_process->save($user_uploading_path.'/'.$filename);
//        dd($request->all());
        $apiData['name'] = $request->get('name');
        $apiData['user_name'] = $request->get('user_name');
        $apiData['email'] = $request->get('email');
        $apiData['password'] = md5($request->get('password'));
        $apiData['gender'] = $request->get('gender');
        $apiData['dob'] = $request->get('dob');
        $apiData['country'] = $request->get('country');
        $apiData['image'] = $filename;

        
        // Api Call 
        
        $apiCall = new ApiCall();
        
        $data = array();
        
        $data['params'] = $apiData;
        $data['m'] = 'user';
        $data['f'] = 'addToUser';
        
        // Assignment
//        $apiCall->runApiCall('user', 'addToUser' ,  $apiData);
        $user_result = $apiCall->runApiCall($data);
        
//        $result = User::addToUser($apiData);
//        dd($user_result);
        $this->viewData['registered_message'] = !empty($user_result->message) ? $user_result->message : '';
        
        return $this->buildPages('registration');

        
    }
}
