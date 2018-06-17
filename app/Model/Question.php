<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $guarded = [];

    public function getRouteKeyName()
    {
        # code...
        return 'slug';
    }

    //
    public function user()
    {
        # code...
        return $this->belongsTo('App\User');
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

    public function getPathAttribute()
    {
        # code...
        return asset("api/question/$this->slug");
    }
}
