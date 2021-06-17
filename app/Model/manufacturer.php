<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class manufacturer extends Model
{
    protected $table = 'manufacturer';
    protected $guest = [];
    protected $primaryKey='manufacturer_id';
    //hãng này có 10sp
}
