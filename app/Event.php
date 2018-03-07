<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'description', 'locationId', 'ownerId', 'ownerTypeId', 'date'];

    public function location()
    {
        return $this->belongsTo('App\Location', 'locationId');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'ownerId');
    }
}
