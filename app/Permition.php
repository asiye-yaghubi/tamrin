<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permition extends Model
{
    protected $fillable = [
        'name', 'title',
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class,'permition_role','permition_id','role_id');
    }
}
