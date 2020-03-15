<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(20);
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('chid',0)->get();
        return view('admin.category.create',compact('category'));
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
            'title_persian' => 'required',
            'image' => 'required',
            
        ]);

        $file = $request['image'];
        $path = 'categorys/';
       $image = $this->ImageUploader($file,$path);
        Category::create([
            'title' => $request['title'],
            'title_persian' => $request['title_persian'],
            'image' => $image,

            
        ]);
        session()->flash('editecategory','ذخیره  دسترسی انجام شد');
        return redirect(route('category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
       return view('admin.category.show',compact('category'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edite',compact('category'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
         //==========validation==============
         $this->validate(request(),[
            'title' => 'required',
            'title_persian' => 'required',
            'image' => 'required',
        ]);
        $file = $request['image'];
        $path = 'categorys/';
        $image = $this->ImageUploader($file,$path);

        $category->image = $image;
        $data = $request->all();    
        $category->update();

        session()->flash('editecategory','تغییرات  دسته بندی انجام شد');
        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('editecategory','  دسته بندی حذف شد');
        return redirect()->back();
    }
}
