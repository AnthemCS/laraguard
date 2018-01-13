<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //

    protected $fillable = [
        "guest_id",
        "arrival_date",
        "departure_date",
        "adults",
        "children",
        "comments"
    ];
}
