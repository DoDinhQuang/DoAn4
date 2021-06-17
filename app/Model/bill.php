<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table = 'bill';
    protected $guest = [];
    protected $primaryKey='bill_id';
}
