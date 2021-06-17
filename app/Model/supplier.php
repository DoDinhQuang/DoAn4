<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table = 'supplier';
    protected $guest = [];
    protected $primaryKey='supplier_id';
}
