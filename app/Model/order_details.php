<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    protected $table = 'order_details';
    protected $guest = [];
    protected $primaryKey='order_details_id';
    public function product_view()
    {
        return $this->hasOne(product::class,'product_id','product_id');
    }
}
