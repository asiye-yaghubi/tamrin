<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;




class ProductController extends AdminController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(20);
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::where('chid','!=0',0)->get();
        $brands = Product::pluck('brand');
        return view('admin.product.create',compact('brands','categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
         //==========validation==============
         $this->validate(request(),[
            'name' => 'required',
            'price' => 'required',
            'brand' => 'required',
            'discount' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'body' => 'required',
            // 'status' => 'required',
            'category' => 'required',
            'count' => 'required',

        ]);
        $file = $request['image'];
        $path = 'products/';
       $image = $this->ImageUploader($file,$path);

        //'image' => 'required|image|mimes:jpeg,png,jpg|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
    
        $user_id = auth()->user()->id;
        Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'status' => $request['status'],
            'body' => $request['body'],
            'discount' => $request['discount'],
            'brand' => $request['brand'],
            'image' => $image,
            'category' => $request['category'],
            'count' => $request['count'],
            'user_id' => $user_id,

        ]);
        session()->flash('editeproduct','ذخیره محصول انجام شد');
        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
       return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        if(Gate::allows('view',$product)){
            $brands = Product::pluck('brand');
        return view('admin.product.edite',compact('product','brands'));
        }
        else{
            session()->flash('permition',"شمااجازه دسترسی به این بخش راندارید");
            return view('errors.101');
            
        }

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product, Request $request)
    {
        //==========validation==============
        $this->validate(request(),[
            'name' => 'required',
            'price' => 'required',
            'brand' => 'required',
            'discount' => 'required',
            // 'image' => 'image',
            'body' => 'required',
            'status' => 'required',

        ]);

//================upload image =============
        if($request['image'])
        {
            unlink($product->image) or die('Delete Error');
            $file = $request['image'];
            $path = 'products/';
            $image = $this->ImageUploader($file,$path);
        }
        else
        {
            $image = $product->image;
        }
       

        $data = $request->all();    
        $data['image'] = $image;
        $product->update($data);

        session()->flash('editeproduct','تغییرات محصول انجام شد');
        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        unlink($product->image) or die('Delete Error');
        $product->delete();
        session()->flash('editeproduct',' محصول حذف شد');
        return redirect()->back();
    }

    public function gallery($id)
    {
            // $id=$request->get('id');
            $product = Product::findOrfail($id);
            return view('/admin/product/gallery',compact('product'));
    }
    public function upload(Request $request)
    {
        $id = $request->get('id');
        $files = $request->file('file');
        $name = rand()."-".$id.'.'.$files->getClientOriginalExtension();
        if($files->move('uploads/gallery',$name))
        {
            $ProductImage = new ProductImage();
            $ProductImage->product_id = $id;
            $ProductImage->url = $name;
            $ProductImage->save();
        }
    }
}
