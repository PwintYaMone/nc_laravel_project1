<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::all();
        return view('admin.orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $orders=Order::all();
        return view('checkout',compact('orders'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {

        $upload="";
       
        $request->validate([
           
            'customer_name'=>'required',
            'customer_email'=>'required',
            'customer_phoneno'=>'required',
            'customer_city'=>'required',
            'customer_address'=>'required',
            'shipping_name'=>'required',
            'shipping_email'=>'required',
            'shipping_phoneno'=>'required',
            'shipping_city'=>'required',
            'shipping_address'=>'required',
            'payment'=>'required'
          
            
        ]);
        
        
        if($request->file('payment_receipt')!=null){
      
                $receipt_photo=rand(0,99999)."_".$request->file('payment_receipt')->getClientOriginalExtension();

                if($request->file('payment_receipt')->move(public_path('images/receipt',$receipt_photo))){

                    $upload="success";
                }
        }
        else{

            $receipt_photo="none";
        }
      

        
        $order_no=rand(111111,999999);


     
            $order= Order::create([
            'order_no'=>"#".$order_no,
            'customer_name'=>$request->customer_name,
            'customer_email'=>$request->customer_email,
            'customer_phoneno'=>$request->customer_phoneno,
            'customer_city'=>$request->customer_city,
            'customer_address'=>$request->customer_address,
            'shipping_name'=>$request->shipping_name,
            'shipping_email'=>$request->shipping_email,
            'shipping_phoneno'=>$request->shipping_phoneno,
            'shipping_city'=>$request->shipping_city,
            'shipping_address'=>$request->shipping_address,
            'purchased_items'=>$request->purchased_items,
            'grand_total'=>$request->grand_total,
            'payment'=>$request->payment,
            'payment_receipt'=>$receipt_photo,
            'order_confirm'=>0,
            'created_at'=>now(),
            'updated_at'=>now()
            
          ]);

          

        return redirect()->route('checkout_success')->with('message','Saving Success...');

    }
        
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order=Order::find($id);
        //dd($order->order_confirm);
        return view('admin.orders.details',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $order=Order::find($id);
        return view('orders.edit',compact('order')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order= Order::find($id);
        $order->order_no= $request->order_no;
        $order->customer_name= $request->customer_name;
        $order->customer_email= $request->customer_email;
        $order->customer_phoneno= $request->customer_phoneno;
        $order->customer_city= $request->customer_city;
        $order->customer_address= $request->customer_address;

        $order->shipping_name= $request->shipping_name;
        $order->shipping_email= $request->shipping_email;
        $order->shipping_phoneno= $request->shipping_phoneno;
        $order->shipping_city= $request->shipping_city;
        $order->shipping_address= $request->shipping_address;



        $order->save();
        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order=Order::find($id);
        $order->delete();
        return redirect()->route('orders.index');
    }

    public function checkout_success(){

        $order = Order::latest()->first();
        $carts=session()->get('cart');

        session()->forget('cart');

        return view('checkout_success',compact('order','carts'));
        
    }

    public function order_confirm($id){

        $order= Order::find($id);
        $order->order_confirm=1;

        $order->save();
        return redirect()->route('orders.index');

    }

 
}
