<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['name', 'description', 'msrp', 'minimumPlayers', 'maximumPlayers', 'recommendedAge', 'categoryId', 'avgGameLength'];

    public function review(){
        return $this->hasMany('App\Review', 'gameId');
    }

    public function category(){
        return $this->hasOne('App\Category', 'id', 'categoryId');
    }

    public function group (){
        return $this->belongsToMany('App\Group');
    }
}
