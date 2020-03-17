<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title','title_persian','image',
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }


    public static function search($data)
    {
        // dd($data);
        $categories = Category::orderBy('id','DESC');
        if(sizeof($data) > 0)
        {
            if(array_key_exists('title',$data) && array_key_exists('title_persian',$data))
            {
                $categories = $categories->where('title','like','%'.$data['title'].'%')
                ->where('title_persian','like','%'.$data['title_persian'].'%');
            }
        }
      $categories = $categories->paginate(10);
      return $categories;  
    }
}
