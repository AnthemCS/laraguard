<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //

    protected $fillable = [
        "guest_id",
        "room_id",
        "arrival_date",
        "departure_date",
        "adults",
        "children",
        "comments",
        "status"
    ];


    public function guest() 
    {
        return $this->belongsTo('App\Guest');
    }

    public function room()
    {
        return $this->belongsTo('App\Room');
    }
    

}
