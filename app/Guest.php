<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    //

    protected $fillable = [  
      "title",
      "firstname",
      "lastname",
      "email",
      "contact_no",
      "fax_no",
      "addr_line_1",
      "addr_line_2",      
      "city",
      "postal_code",
      "country"            
    ];

    public function reservations()
    {
        return $this->hasMany('App\Reservation', 'guest_id');
    }
}
