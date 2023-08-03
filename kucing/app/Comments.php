<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'post_anggota_id',
        'user_id',
        'message',
    ];

    public function postanggota()
    {
        return $this->belongsTo(postanggota::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
