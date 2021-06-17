<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    protected $guest = [];
    protected $primaryKey='product_id';
    public function getPrice()
    {
        return $this->hasOne(configuration::class,'product_id','product_id');
    }
    public function getColor(){
        return $this->hasMany(phone_color::class,'product_id','product_id');
    }
    //public function getNumber(){
        //return $this->hasMany(configuration::class,'product_id','product_id');
    //}
}
