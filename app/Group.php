<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'description'];

    public function event (){
        return $this->hasMany('App\Event', 'ownerId');
    }

    public function game (){
        return $this->belongsToMany('App\Game');
    }
}
