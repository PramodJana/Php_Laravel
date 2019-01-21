<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegistration extends Controller
{
    //Registration function
    public function postRegister(Request $request)
    {
      //Retrive the name input

      $name=$request->input('name');
      echo "Name: ".$name;
      echo "<br>";

      //Retrive the user name input

      $username=$request->input('username');
      echo "User Name: ".$username;
      echo "<br>";


      //Retrive the Password input

      $password=$request->input('password');
      echo "Password: ".$password;
      echo "<br>";
    }
}
