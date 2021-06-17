<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'order';
    protected $guest = [];
    protected $primaryKey='order_id';
    public function order_view(){
        return $this->hasMany(order_details::class,'order_id','order_id');

    }
}
