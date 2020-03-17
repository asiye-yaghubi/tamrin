<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Filter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilterController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filters = Filter::paginate(20);
        return view('admin.filter.index',compact('filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::get();
        $filters = Filter::where('parent_id',0)->get();
        return view('admin.filter.create',compact('categorys','filters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parent_id = $request->get('parent_id');
        $category_id = $request->get('category_id');
        $names_persian = $request->get('name_persian');
        $names = $request->get('name');
        $types = $request->get('type');
        if(is_array($names_persian))
        {
            foreach($names_persian as $key => $value)
            {
                $name = array_key_exists($key,$names) ? $names[$key]:'-';
                $type = array_key_exists($key,$types) ? $types[$key]:1;
                Filter::create([
                    'category_id'=>$category_id,
                    'name'=>$name,
                    'name_persian'=>$value,
                    'type'=>$type,
                    'parent_id'=>$parent_id,

                ]);
            }
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function show(Filter $filter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function edit(Filter $filter)
    {
        $categorys = Category::get();
        $filters = Filter::where('parent_id',0)->get();
        return view('admin.filter.edite',compact('categorys','filters','filter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filter $filter)
    {
        
         //==========validation==============
         $this->validate(request(),[
            'name' => 'required',
            'name_persian' => 'required',
        ]);
        $data = $request->all();    
        $filter->update($data);

        session()->flash('editefilter','تغییرات  فیلتر انجام شد');
        return redirect(route('filter.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filter $filter)
    {
        $filter->delete();
        session()->flash('editefilter','  فیلتر حذف شد');
        return redirect()->back();
    }
}
