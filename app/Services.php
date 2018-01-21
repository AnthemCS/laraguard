<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //

    protected $fillable = [
        "name",
        "description",
        "unit_price"
    ];


    public function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }
}
