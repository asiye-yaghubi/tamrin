<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{

    public function ImageUploader($file,$path)
    {
        $filename = time().'.'.$file->getClientOriginalExtension();
        $databasename = '/uploads/'.$path;
        $mainpath = public_path($databasename);
        $changesize = $file->move($mainpath,$filename);

        //============================= resize ======================================
        $img = Image::make($changesize->getRealPath());
        // $img->resize(200,150);
        //================تغییر ارتفاع متناسب با عرض خودش انحام میده=================
        $img->resize(200,null,function($constraint){
            $constraint->aspectRatio();
        });

        $img->save($mainpath."small-".$filename);

        return $databasename.$filename;
    }
}
