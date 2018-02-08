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

    public function getFullNameAttribute()
    {
        return ucfirst($this->title). " {$this->firstname} {$this->lastname}";
    }

    public function getFullAddressAttribute()
    {
        return "{$this->addr_line_1} {$this->addr_line_2}, {$this->city}, {$this->postal_code}";
    }
    public function getContactDetailsAttribute()
    {
        return "{$this->contact_no}, {$this->email }, {$this->fax_no}";
    }

    public function reservations()
    {
        return $this->hasMany('App\Reservation', 'guest_id');
    }
}
