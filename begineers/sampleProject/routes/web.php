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

Route::get('/', function () {
    return view('welcome');
});

Route::get('role',[
  'middleware'=>'Role:editor',
  'uses'=>'DemoController@index',
]);

Route::get('/usercontroller/path',[
  'middleware'=>'First',
  'uses'=>'UserController@showPath',
]);


Route::get('terminate',[
  'middleware'=>'Terminate',
  'uses'=>'ABCController@index',
]);

Route::get('/register',function()
{
  return view('register');
});

Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));



Route::get('/foo/bar','UriController@index');

Route::get('/cookie/set','CookieController@setCookie');

Route::get('/cookie/get','CookieController@getCookie');

Route::get('/basic_response',function()
{
  return "Response is returned";
}
);
