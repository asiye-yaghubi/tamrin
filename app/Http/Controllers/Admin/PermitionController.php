<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Permition;
use Illuminate\Http\Request;

class PermitionController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permitions = Permition::latest()->paginate(20);
        return view('admin.permition.index',compact('permitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permition.create');
        
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
            'name' => 'required',
            'title' => 'required',
            
        ]);
       
        Permition::create([
            'name' => $request['name'],
            'title' => $request['title'],
            
        ]);
        session()->flash('editepermition','ذخیره  دسترسی انجام شد');
        return redirect(route('permition.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permition  $permition
     * @return \Illuminate\Http\Response
     */
    public function show(Permition $permition)
    {
       return view('admin.permition.show',compact('permition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permition  $permition
     * @return \Illuminate\Http\Response
     */
    public function edit(Permition $permition)
    {
        return view('admin.permition.edite',compact('permition'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permition  $permition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permition $permition)
    {
         //==========validation==============
         $this->validate(request(),[
            'name' => 'required',
            'title' => 'required',
        ]);
        $data = $request->all();    
        $permition->update($data);

        session()->flash('editepermition','تغییرات سطح دسترسی انجام شد');
        return redirect(route('permition.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permition  $permition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permition $permition)
    {
        $permition->delete();
        session()->flash('editepermition','  دسترسی حذف شد');
        return redirect()->back();
    }
}
