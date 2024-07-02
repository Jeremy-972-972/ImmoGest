<?php

namespace App\Http\Controllers;

use App\Models\TutoProduct;
use Illuminate\Http\Request;
use App\Models\CategoryProduct;

class TutoController extends Controller
{
    public function index()
    {
        $categories = CategoryProduct::find(1);
        $product = TutoProduct::find(5);
        dd($product);
       

        // return'index';
        return view ('tuto' , compact('categories'));
    }
}


