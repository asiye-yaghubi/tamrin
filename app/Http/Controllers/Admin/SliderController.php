<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::paginate(10);
        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //==========validation==============
        $this->validate(request(),[
            'title' => 'required',
            'url' => 'required',
            'image' => 'required',
            
        ]);

        $file = $request['image'];
        $path = 'sliders/';
       $image = $this->ImageUploader($file,$path);
        Slider::create([
            'title' => $request['title'],
            'url' => $request['url'],
            'image' => $image,
            ]);
        session()->flash('editeslider','ذخیره  اسلایدر انجام شد');
        return redirect(route('slider.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
       return view('admin.slider.show',compact('slider'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edite',compact('slider'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //==========validation==============
        $this->validate(request(),[
            'title' => 'required',
            'url' => 'required',
            // 'image' => 'required',
        ]);
        if($request['image'])
        {
            unlink($slider->image) or die('Delete Error');
            $file = $request['image'];
            $path = 'sliders/';
            $image = $this->ImageUploader($file,$path);
        }
        else{
            $image = $slider->image;
        }
        
        $data = $request->all();    
        $data['image'] = $image;
        $slider->update($data);

        session()->flash('editeslider','تغییرات اسلایدر انجام شد');
        return redirect(route('slider.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        unlink($slider->image) or die('Delete Error');
        $slider->delete();
        session()->flash('editeslider','   اسلایدر حذف شد');
        return redirect()->back();
    }
}
