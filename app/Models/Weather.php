<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $table = 'weather';
    protected $guarded = [];
    protected $dates = ['updated_at','created_at'];
}
