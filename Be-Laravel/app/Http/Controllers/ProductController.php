<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(){

        return view('admin.products');
    }
    public function categories(){

        return view('admin.categories');
    }
}
