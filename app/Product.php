<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','price','brand','body','image','status','discount','category','count','user_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function basket()
    {
        return $this->hasMany(Basket::class);
    }
}
