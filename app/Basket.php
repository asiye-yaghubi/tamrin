<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    // protected $guarded=[];
    protected $fillable = [
        'product_id','user_id','count','price','status',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
