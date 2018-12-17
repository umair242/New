<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Image;
use App\Http\Helpers\ApiCall;

class ProductController extends ViewCompilingController {

    public function getAddProductPage() {
//        dd('asd');
//        dd(strlen('$2y$10$RXHKGIFMPRlzP/Usj/CTMueb1pP4D0asquU0j9Rc8bZjAeE7Gqtjq'));
        return $this->buildPages('add_product');
    }

    public function postAddProductPage(Request $request) {
        $apiData = array();
//        dd($request->all());
        //|unique:eshop_products
        $rules = [
            'p_name' => 'required|min:3|max:20',
            'p_description' => 'required|min:50',
            'p_brand' => 'required',
            'p_category' => 'required',
         //   'wronty_s' => 'required|date',
         //   'wranty_e' => 'required|date',
            'p_quantity' => 'required',
            'p_image' => 'mimes:jpg,jpeg,png',
        ];

        $messages = [
            'p_name.min' => '3 char req',
            'p_description.required' => 'your product description is empty',
            'p_description.min' => 'your product description length is less then 50'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);



        // check pending on fail case
//        dd($validator->fail());

        $image = $request->file('p_image');


        $image_process = Image::make($request->file('p_image'));

        $filename = $request->get('p_name') . '.' . $image->getClientOriginalExtension();


        if (!is_dir(public_path('/products'))) {
            mkdir(public_path('/products'));
        }

        if (!is_dir(public_path('/products/' . $request->get('p_name')))) {
            mkdir(public_path('/products/' . $request->get('p_name')));
        }

        $user_uploading_path = public_path('/products/' . $request->get('p_name'));

//        $watermark = Image::make(public_path('/img/wmark.png'));
//        $image_process->resize(200, 100);
//        $image_process->insert($watermark, 'center');



        $image_process->save($user_uploading_path . '/' . $filename);

        $apiData['name'] = $request->get('p_name');
        $apiData['description'] = $request->get('p_description');
        $apiData['brnad'] = $request->get('p_brand');
        $apiData['category'] = $request->get('p_category');
        //$apiData['wstart'] = $request->get('wronty_s');
        //$apiData['wend'] = $request->get('wranty_e');
        $apiData['quantity'] = $request->get('p_quantity');
        $apiData['image'] = $filename;
//        dd($apiData);

        // Api Call 

        $apiCall = new ApiCall();

        $data = array();

        $data['params'] = $apiData;
        $data['m'] = 'product';
        $data['f'] = 'addProduct';

        // Assignment
//        $apiCall->runApiCall('user', 'addToUser' ,  $apiData);
        $product_result = $apiCall->runApiCall($data);
//        $result = User::addToUser($apiData);
//        dd($user_result);
        $this->viewData['message'] = !empty($product_result->message) ? $product_result->message : '';

        return $this->buildPages('add_product');
    }
    
    public function getSearchProduct(Request $request){
        $apiData['productSearch'] = $request->get('searchData');
//        dd($apiData);

        // Api Call 

        $apiCall = new ApiCall();

        $data = array();

        $data['params'] = $apiData;
        $data['m'] = 'product';
        $data['f'] = 'getProducts';
        $product_result = $apiCall->runApiCall($data);
        return json_encode($product_result);
    }

}
