<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //

    protected $guarded = [];

    public function question()
    {
        # code...
        return $this->belongsTo(Question::class);
    }

    public function user()
    {
        # code...
        return $this->belongsTo('App\User');
    }
    public function like()
    {
        # code...
        return $this->hasMany(Like::class);
    }
}
