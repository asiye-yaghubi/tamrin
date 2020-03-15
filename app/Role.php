<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'title',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class,'role_user');
    }
    public function permitions()
    {
        return $this->belongsToMany(Permition::class,'permition_role','role_id','permition_id');
    }
}
