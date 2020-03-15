<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // // return auth()->user()->roles()->get();
        // dd(auth()->user()->hasRole('Costomer2'));
        $users = User::paginate(20);
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $permitions = Permition::latest()->get();
        // return view('admin.user.create',compact('permitions'));
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
       
        $user = User::create([
            'name' => $request['name'],
            'title' => $request['title'],
        ]);
        
        $user->permitions()->sync($request->input('permition_id'));

        session()->flash('editeuser','ذخیره سطح دسترسی انجام شد');
        return redirect(route('user.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // var_dump($user->roles()->first()->title);die;
       return view('admin.user.show',compact('user'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::get();
        return view('admin.user.edite',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //==========validation==============
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'role_id' => 'required',
            
        ]);
       
        $data = $request->all();
        $user->update($data);
        
        $user->roles()->sync($request->input('role_id'));

        session()->flash('editeuser',' به روزرسانی دسترسی  کاربر انجام شد');
        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('editeuser',' سطح دسترسی حذف شد');
        return redirect()->back();
    }
}
