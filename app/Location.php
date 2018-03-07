<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name', 'address', 'city', 'state', 'zip'];

    public function event(){
        $this->hasMany('App\Event', 'id');
    }
}
