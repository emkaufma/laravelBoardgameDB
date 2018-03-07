<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'description', 'location_id', 'user_id', 'ownerTypeId', 'date'];

    public function location()
    {
        return $this->hasOne('App\Location', 'id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'ownerId');
    }
}
