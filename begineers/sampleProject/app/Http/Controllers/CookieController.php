<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    //setting up a value in Cookie

    public function setCookie(Request $request)
    {
      $minutes=1;
      $response= new Response('hello world');
      $response->withCookie(cookie('name','Pramod',$minutes));
      return $response;
    }

    public function getCookie(Request $request)
    {
      $value=$request->cookie('name');
      echo $value;
    }
}
