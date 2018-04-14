<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
    //
    protected $fillable = array('name', 'email', 'phone_no');
    public function billingInvoices()
    {
        return $this->hasMany('App\BillingInvoice', 'emp_id', 'id');
    }
}
