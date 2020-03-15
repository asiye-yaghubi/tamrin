<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','price','brand','body','image','status','discount','category','count','user_id',
    ];
}
