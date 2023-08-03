<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postanggota extends Model
{
    protected $table = "post_anggota";

    protected $fillable = ['title', 'id_category_anggota','description', 'image'];

    public function category_anggota()
    {
      return $this->belongsTo('App\categoryanggota', 'id_category_anggota');
    }

    public function comment()
    {
        return $this->hasMany(Comments::class);
    }
}
