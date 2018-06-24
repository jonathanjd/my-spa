<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = ['title', 'slug', 'body', 'user_id', 'category_id'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($question) {
            $question->slug = str_slug($question->title);
        });
    }

    public function getRouteKeyName()
    {
        # code...
        return 'slug';
    }

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

    public function getPathAttribute()
    {
        # code...
        return "/question/$this->slug";
    }
}
