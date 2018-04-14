<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = array('name', 'description', 'unit_price');

    public function billingItems()
    {
        return $this->belongsToMany('App\BillingItem', 'item_id', 'id');
    }
}
