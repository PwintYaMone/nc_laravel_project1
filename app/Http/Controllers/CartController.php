<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminProduct;

class CartController extends Controller
{


    public function index(){

        $carts=session()->get('cart');

         return view('cart',compact('carts'));


    }
    public function add(Request $request,$id){

   

        $product = AdminProduct::find($id);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "qty" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }
             // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['qty']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "qty" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }

    public function destroy($id){

        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');


    }

    public function increase($id){

        $cart = session()->get('cart');

        if(isset($cart[$id])) {

            $cart[$id]['qty']++;
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
        
    }

    public function decrease($id){

        $cart = session()->get('cart');

        if(isset($cart[$id])) {

            if($cart[$id]['qty']<2){

                $cart[$id]['qty']=1;

            }
            else{
                $cart[$id]['qty']--;

            }
            

            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product subtracted to cart successfully!');

    }
    public function checkout(){
        
        $carts=session()->get('cart');
        return view('checkout',compact('carts'));
    }
}
