<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillingInvoice extends Model
{
    //
    protected $fillable = array('guest_id', 'tax', 'sub_total', 'total', 'emp_id', 'notes');

    public function guest()
    {
        return $this->hasOne('App\Guest', 'id', 'guest_id');
    }
}
