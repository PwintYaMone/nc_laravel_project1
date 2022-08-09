<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $products=Product::paginate(5);
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()

    {
        return view('product.create');
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
            'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
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
            Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'photo'=>$photo
          ]);

        return redirect()->route('product.index')->with('message','Saving Success...');
    }
    else{
        echo "Unknown error";
    }
    }
        
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       

    } 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

    $product = Product::find($id);

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
        $product->photo = $photo_name;
    }

    $product->name = $request->name;
    $product->price= $request->price;
    $product->save();
    return redirect()->route('product.index')->with('success','Product updated successfully');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
 
    {

        $product=Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('message','Delete Success');

    }

    //search string
    public function search(Request $request){

        $str=$request->input('search_str');
        $search_term="%".$str."%";
        $products=Product::where('name','LIKE',$search_term)->paginate(5);

        return view('product.index',compact('products'));


    }

}
