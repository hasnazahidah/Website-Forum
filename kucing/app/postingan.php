<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postingan extends Model
{
    protected $table = "postingan";

    protected $fillable = ['title', 'id_Category', 'description', 'image'];

    public function Category()
    {
      return $this->belongsTo('App\Category', 'id_Category');
    }

}
