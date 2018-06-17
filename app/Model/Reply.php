<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    public function question()
    {
        # code...
        return $this->belongsTo(Question::class);
    }

    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }
    public function like()
    {
        # code...
        return $this->hasMany(Like::class);
    }
}
