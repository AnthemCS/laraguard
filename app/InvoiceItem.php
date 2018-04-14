<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    //
    protected $fillable = array('billing_invoice_id',"item_id",'quantity','line_total');

    public function items()
    {
        return $this->hasMany('App\InvoiceItem', 'item_id', 'id');
    }
}
