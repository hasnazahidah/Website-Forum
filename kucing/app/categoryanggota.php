<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoryanggota extends Model
{
  protected $table = "category_anggota";

  protected $fillable = ['name'];

  public function post_anggota()
  {
    return $this->hasMany('App\postanggota', 'id_category_anggota');
  }
}
