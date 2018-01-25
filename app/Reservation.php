<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //

    protected $fillable = [
        "guest_id",
        "room_id",
        "service_id",
        "arrival_date",
        "departure_date",
        "adults",
        "children",
        "comments",
        "status_id"
    ];


    public function guest() 
    {
        return $this->belongsTo('App\Guest');
    }

    public function rooms()
    {
        return $this->hasMany('App\Room', 'id', 'room_id');
    }

    public function services()
    {
        return $this->hasMany('App\Services', 'id', 'service_id');
    }

    public function status()
    {
        return $this->hasOne('App\Status', 'id', 'status_id');
    }
    

}
