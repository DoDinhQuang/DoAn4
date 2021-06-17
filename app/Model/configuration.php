<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class configuration extends Model
{
    protected $table = 'configuration';
    protected $guest = [];
    protected $primaryKey='configuration_id';
}
