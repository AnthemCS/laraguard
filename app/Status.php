<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //

    protected $fillable = [
        'id',
        'name',
        'type',
        'description'
    ];


    public function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }
}
