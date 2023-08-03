<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postingan;
use App\category;
use App\User;

class DashboardController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index(){

      $title = "Halaman Utama";
      $posts = postingan::orderBy('updated_at', 'desc')->paginate(6);
      $category = category::orderBy('updated_at', 'desc')->paginate(6);
      return view('dashboard', compact('title', 'posts', 'category'));
    }

    public function readmore(postingan $postingan)
    {
      return view('moreadmin', compact('postingan'));

    }

    public function total()
    {
      $postingan = postingan::all()->count();
      $category = category::all()->count();
      $users = user::all()->count();
      return view('dashboard', compact('postingan', 'category', 'users'));
    }
}
