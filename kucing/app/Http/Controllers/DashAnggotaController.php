<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postingan;
use App\category;

class DashAnggotaController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index(){
      $title = "Halaman Utama";
      $posta = postingan::orderBy('updated_at', 'desc')->paginate(6);
      $categorya = category::orderBy('updated_at', 'desc')->paginate(6);
      return view('anggota-dashboard', compact('title', 'posta', 'categorya'));
    }

    public function readmore(postanggota $postanggota)
    {
      return view('moreanggota', compact('postanggota'));

    }
}
