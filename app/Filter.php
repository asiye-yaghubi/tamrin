<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $fillable = [
        'category_id','name','name_persian','parent_id','type',
    ];
}
