<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function register()
  {
    return view('register');
  }

  public function wellcome()
  {
    return view('wellcome');
  }

  public function wellcomepost(Request $reg)
  {
    $name = $reg['firstname'] . ' ' . $reg['lastname'];
    return view('wellcome', ["name" => $name]);
  }
}
