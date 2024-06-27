<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;


class HomeController extends Controller
{
       public function index(){
        $products= Products::orderBy('id', 'desc')->get();
        return view('home',compact('products'));
       }
}
