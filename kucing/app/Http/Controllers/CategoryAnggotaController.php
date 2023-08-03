<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoryanggota;
use Validator;

class CategoryAnggotaController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
    $title = "Category";
    $category_anggota_list = categoryanggota::all();
    return view('categoryanggota.index', compact('title', 'category_anggota_list'));
  }

  public function create()
  {
    $title = "Add Category";
    return view('categoryanggota.create', compact('title'));
  }

  public function store(Request $request)
  {
    $input = $request->all();
    $validator = Validator::make($input, [
      'name' => 'required|string|max:20',
    ]);

    if ($validator->fails()){
      return redirect('categoryanggota/create')->withInput()->withErrors($validator);
    }

    categoryanggota::create($input);
    return redirect('categoryanggota');
  }
  public function edit($id)
  {
    $title = "Edit Category";
    $categoryanggota = categoryanggota::findOrFail($id);
    return view('categoryanggota.edit', compact('title','categoryanggota'));
  }

  public function update($id, Request $request)
  {
    $categoryanggota = categoryanggota::findOrFail($id);

    $input =$request->all();
    $validator = Validator::make($input, [
      'name' => 'required|string|max:20',
    ]);

    if ($validator->fails()){
      return redirect('categoryanggota/create' . $id . '/edit')->withInput()->withErrors($validator);
    }

    $categoryanggota->update($input);
    return redirect('categoryanggota');
  }

  public function destroy($id)
  {
    $categoryanggota = categoryanggota::findOrFail($id);

    $categoryanggota->delete();
    return redirect('categoryanggota');
  }
}
