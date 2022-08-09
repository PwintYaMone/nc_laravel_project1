<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrdertrackingController extends Controller
{
    public function index($id){

        $order=Order::find($id);
         
        return view('admin.ordertracking.index',compact('order'));
    }

    public function update1(Request $request,$id)
    
    {

            $order=Order::find($id);
            $order->delivery_time=$request->delivery_time;
            $order->order_confirm=1;
            $order->save();
            return redirect()->back('')->with('success','Successfully Confirmed Order');
        
    }


    public function update2(Request $request,$id){

        $order=Order::find($id);
        $order->courier_name=$request->courier_name;
        $order->courier_phone=$request->courier_phone;
        $order->pickedbycourier=1;
        $order->save();
        return redirect()->back()->with('success','Successfully Picked By Courier');

    }
    public function update3(Request $request,$id){

        $order=Order::find($id);

        $order->courier_name=$request->courier_name;
  
        $order->ontheway=1;

        $order->save();
        return redirect()->back()->with('success','Successfully On the Way');

    }
    public function update4(Request $request,$id){

        $order=Order::find($id);

        $order->tracking=$request->tracking;
  
        $order->readyforpickup=1;

        $order->save();
        return redirect()->back()->with('success','Successfully Ready for PickUp');

    }
}
