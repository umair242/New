<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//    Route::get('/', function () {
//    return view('welcome');
Route::get('/','HomePageController@getHomePage');

Route::get('/Contact_us','HomePageController@getContactPage');
Route::get('/news','HomePageController@getNewsPage');
Route::get('/delivery','HomePageController@getDeliveryPage');
Route::get('/about','HomePageController@getAboutPage');
Route::get('/home','HomePageController@getHomePage');

Route::get('/mobile_phones','HomePageController@getmobile_phonesPage');
Route::get('/desktop','HomePageController@getdesktopPage');
Route::get('/laptop','HomePageController@getlaptopPage');
Route::get('/accessories','HomePageController@getaccessoriesPage');
Route::get('/Sports','HomePageController@getSportsPage');
Route::get('/footwear','HomePageController@getfootwearPage');
Route::get('/jewellery','HomePageController@getjewelleryPage');
Route::get('/beauty','HomePageController@getbeautyPage');


Route::get('/login','UserController@getloginPage');
Route::get('/registration','UserController@getRegistrationPage');
Route::post('/registration','UserController@postRegistrationform');

Route::get('/lp-admin','AdminController@getHomePage');
Route::get('/lp-admin/add-product','ProductController@getAddProductPage');
Route::post('/lp-admin/add-product','ProductController@postAddProductPage');

