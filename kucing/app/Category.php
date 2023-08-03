<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $table = "Category";

  protected $fillable = ['name'];

  public function postingan()
  {
    return $this->hasMany('App\postingan', 'id_Category');
  }
}
