<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Userscontroller extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
  
    public function index(){
      $title = "Users";
      return view('Users.index', compact('title'));
    }
}
