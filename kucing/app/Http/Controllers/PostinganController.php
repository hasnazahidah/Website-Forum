<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Postingan;
use App\Category;
use App\Comment;
use Validator;
use illuminate\Support\Facades\Storage;


class PostinganController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
    $title = "Forum Discussion";
    $list_postingan = Postingan::orderBy('updated_at', 'desc')->simplePaginate(1000);
    return view('postingan.index', compact('title', 'list_postingan'));
  }



  public function create()
  {
    $title = "Add Discussion";
    $category = Category::get();
    return view('postingan.create', compact('title', 'category'));
  }

  public function store(Request $request)
  {

    $input = $request->all();
    // $Postingan = new \App\Postingan;
    // $Postingan->title = $request->title;
    // $Postingan->id_Category= $request->id_Category;
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

    Postingan::create($input);
    return redirect('postingan');
  }



  public function show(postingan $postingan)
  {
    $comments = Comment::get();
    return view('postingan.show', compact('postingan', 'comments'));
  }

  public function edit($id)
  {
    $title = "Edit Discussion";
    $category = Category::get();
    $postingan = Postingan::findOrFail($id);
    return view('postingan.edit', compact('title','postingan', 'category'));
  }

  public function update($id, Request $request)
  {
    $Postingan = Postingan::findOrFail($id);

    $input =$request->all();

    $validator = Validator::make($input, [
      'title' => 'required|string|max:200',
      'id_Category' => 'required',
      'description' => 'required',
      'image' => 'image|max:500|mimetypes:image/jpg,image/jpeg,image/png'
    ]);

    if($validator->fails()){
      return redirect('postingan/' . $id . 'edit/')->withInput()->withErrors($validator);
    }

    if($request->hasFile('image')){
      $image = $request->file('image');
      if(isset($Postingan->image) && file_exists('imageUpload/'.$Postingan->image)){
        unlink('imageUpload/'.$Postingan->image);
      }


      if($image->isValid()){
        $image_name = $image->getClientOriginalName();
        $upload_path = 'imageUpload';
        $image->move($upload_path, $image_name);
        $input['image'] = $image_name;
      }
    }

    $Postingan->update($input);
    return redirect('postingan');
  }

  public function destroy($id)
  {
    $Postingan = Postingan::findOrFail($id);

    if(isset($postingan->image) && file_exists('imageUpload/'.$Postingan->image)){
      unlink('imageUpload/'.$Postingan->image);
    }

    $Postingan->delete();
    return redirect('postingan');
  }
}
