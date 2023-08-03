<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\postanggota;
use App\categoryanggota;
use illuminate\Support\Facades\Storage;

class PostinganAnggotaController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
    $title = "Forum Discussion";
    $list_post_anggota = postanggota::orderBy('updated_at', 'desc')->simplePaginate(1000);
    return view('postanggota.index', compact('title', 'list_post_anggota'));
  }

  public function create()
  {
    $title = "Add Discussion";
    $categoryanggota = categoryanggota::get();
    return view('postanggota.create', compact('title', 'categoryanggota'));
  }

  public function store(Request $request)
  {
    $input = $request->all();
    // $Postingan = new \App\Postingan;
    // $Postingan->title = $request->title;
    // $Postingan->id_category_anggota= $request->id_category_anggota;
    // $Postingan->description = $request->description;


    if($request->hasFile('image')){
      $image = $request->file('image');

      if($image->isValid()){
        $image_name = $image->getClientOriginalName();
        $upload_path = 'imageUpload';
        $image->move($upload_path, $image_name);
        $input['image'] = $image_name;
      }
    }

    postanggota::create($input);
    return redirect('postanggota');
  }

  public function show(postanggota $postanggota)
  {
    return view('postanggota.show', compact('postanggota'));
  }
  

  public function edit($id)
  {
    $title = "Edit Discussion";
    $categoryanggota = categoryanggota::get();
    $postanggota = postanggota::findOrFail($id);
    return view('postanggota.edit', compact('title', 'postanggota', 'categoryanggota'));
  }

  public function update($id, Request $request)
  {
    $postanggota = postanggota::findOrFail($id);
    $input = $request->all();


    if($request->hasFile('image')){
      $image = $request->file('image');
      if(isset($postanggota->image) && file_exists('imageUpload/'.$postanggota->image)){
        unlink('imageUpload/'.$postanggota->image);
      }

      if($image->isValid()){
        $image_name = $image->getClientOriginalName();
        $upload_path = 'imageUpload';
        $image->move($upload_path, $image_name);
        $input['image'] = $image_name;

      }
    }

    $postanggota->update($input);;
    return redirect('postanggota');
  }



  public function destroy($id)
  {
    $postanggota = postanggota::findOrFail($id);

    if(isset($postanggota->image) && file_exists('imageUpload/'.$postanggota->image)){
      unlink('imageUpload/'.$postanggota->image);
    }

    $postanggota->delete();
    return redirect('postanggota');
  }
}
