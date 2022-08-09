<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\SubCategory;
use App\Models\AdminProduct;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminproducts=AdminProduct::all();
        return view('admin.products.index',compact('adminproducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories=SubCategory::all();
        $categories=Category::all();

        return view('admin.products.create',compact('subcategories','categories')); 
        
       
      }
      
      
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           
            'name'=>'required',
            'price'=>'required|numeric',
            'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sub_id'=>'required|numeric',
            'cat_id'=>'required|numeric'


        ]);
        
        $upload="none";
        $error=$request->file('photo')->getError();
        if($error==0){
            $photo=rand(0,99999).".".$request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move(public_path('images'),$photo);
            $upload="success";
        }
        else{
            $upload="error";
        }

        if($upload=="success"){
            AdminProduct::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'photo'=>$photo,
            'sub_id'=>$request->sub_id,
            'cat_id'=>$request->cat_id


          ]);

        return redirect()->route('products.index')->with('message','Saving Success...');
    }
    else{
        echo "Unknown error";
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function show(AdminProduct $adminProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin_product=AdminProduct::find($id);
        return view('admin.products.edit',compact('admin_product'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin_product = AdminProduct::find($id);

    //dd($request->hasFile('newphoto'));

    if($request->hasFile('newphoto')){
        
        $request->validate([
          'newphoto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        //get photo name
        $photo_name=rand(0,99999).".".$request->file('newphoto')->getClientOriginalExtension();
        //saving photo
        $request->file('newphoto')->move('images/',$photo_name);
        //saving photo name into database
        $admin_product->photo = $photo_name;
    }

    $admin_product->name = $request->name;
    $admin_product->price= $request->price;
    $admin_product->photo=$photo_name;

    $admin_product->cat_id= $request->cat_id;
    $admin_product->sub_id= $request->sub_id;


    $admin_product->save();
    return redirect()->route('products.index')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin_product=AdminProduct::find($id);
        $admin_product->delete();
        return redirect()->route('products.index');
        }
}
