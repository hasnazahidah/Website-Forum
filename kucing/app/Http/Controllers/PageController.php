<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\categoryanggota;
use App\postanggota;
use App\postingan;


class PageController extends Controller
{
    public function index(){
      $posts = postingan::orderBy('updated_at', 'desc')->paginate(6);
      $posta = postanggota::orderBy('updated_at', 'desc')->paginate(6);
      $category = Category::orderBy('updated_at', 'desc')->paginate(6);
      $categorya = categoryanggota::orderBy('updated_at', 'desc')->paginate(6);

      return view('index', compact('posts', 'category', 'posta', 'categorya'));
    }

    public function readmore(postingan $postingan)
    {
      return view('readmore', compact('postingan'));

    }

}
