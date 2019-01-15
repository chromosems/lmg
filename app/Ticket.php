<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ([
        'title',
        'content',
        'slug',
        'user_id',
        'status'
    ]);

    public function user()
    {
        return $this->BelongsTo(App\User);
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function comments(){
      return $this->hasMany('App\Comment','post_id');
    }

}
