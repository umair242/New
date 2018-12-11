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


//Route::get('/login','UserController@getloginPage');
//Route::get('/registration','UserController@getRegistrationPage');
//Route::post('/registration','UserController@postRegistrationform');




