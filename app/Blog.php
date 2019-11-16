<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title','body'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //define $blog->author
    public function getPenulisAttribute(){
        return !is_null($this->user) ? $this->user->name : "No author";
    }
}
