<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UriController extends Controller
{
    //
    public function index(Request $request)
    {
      //Usage of the path method
      $path=$request->path();
      echo "Path method ".$path;
      echo "<br>";

      //usage of is method
      $pattern= $request->is('foo/*');
      echo "is method ".$pattern;
      echo '<br>';

      //usage of URL method
      $url=$request->url();
      echo "URL method ".$url;
      echo '<br>';
    }
}
