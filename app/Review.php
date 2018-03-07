<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['userId', 'gameId', 'rating', 'comments'];

    public function user(){
        return $this->hasOne('App\User', 'id', 'userId');
    }
}
