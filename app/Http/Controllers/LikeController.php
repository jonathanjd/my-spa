<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('JWT');
    }

    public function likeit(Reply $reply)
    {
        # code...
        $reply->like()->create([
            'user_id' => '1'
        ]);
    }

    public function unlikeit(Reply $reply)
    {
        # code...
        $reply->like()->where('user_id', '1')->first()->delete();
    }
}
