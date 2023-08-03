<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postanggota;
use App\Comments;

class PostCommentController extends Controller
{
    public function store(Request $request, postanggota $postanggota)
    {
        $postanggota->comment()->create(array_merge(
                                $request->only('message'),
                                ['user_id' => auth()->id()]
                            ));

        return redirect()->back();
    }
}
