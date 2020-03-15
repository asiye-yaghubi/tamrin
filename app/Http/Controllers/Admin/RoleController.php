<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Permition;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::latest()->paginate(20);
        return view('admin.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permitions = Permition::latest()->get();
        return view('admin.role.create',compact('permitions'));
    
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
            'permition_id' => 'required',
            
        ]);
       
        $role = Role::create([
            'name' => $request['name'],
            'title' => $request['title'],
        ]);
        
        $role->permitions()->sync($request->input('permition_id'));

        session()->flash('editerole','ذخیره سطح دسترسی انجام شد');
        return redirect(route('role.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
       return view('admin.role.show',compact('role'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        // if(Gate::allows('view',$role)){
            $permitions = Permition::get();
        return view('admin.role.edite',compact('role','permitions'));
        // }
        // else{
        //     session()->flash('permition',"شمااجازه دسترسی به این بخش راندارید");
        //     return view('errors.101');
            
        // }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
         //==========validation==============
         $this->validate(request(),[
            'name' => 'required',
            'title' => 'required',
            'permition_id' =>'required',

        ]);
        $data = $request->all();    
        $role->update($data);
        $role->permitions()->sync($request->input('permition_id'));

        session()->flash('editerole','تغییرات سطح دسترسی انجام شد');
        return redirect(route('role.index'));
        // return redirect('role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        session()->flash('editerole',' سطح دسترسی حذف شد');
        return redirect()->back();
    }
}
