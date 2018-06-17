<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        # code...
        return $this->hasMany(Reply::class);
    }

    public function category()
    {
        # code...
        return $this->belongsTo(Category::class);
    }
}
