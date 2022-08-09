<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminProduct;

class FrontendController extends Controller
{
    public function welcome(){

        $products=AdminProduct::paginate(12);
        return view('welcome',compact('products'));
    }
    }
   
