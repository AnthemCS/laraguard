<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
        "room_title",
        "room_no",
        "room_type",
        "description",
        "occupancy",
        "beds",
        "price"
    ];

    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
