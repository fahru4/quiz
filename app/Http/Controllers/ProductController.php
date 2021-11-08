<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\Product_detail;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function index(){
   	//  $product = Product::all();
    // 	 return view('product',['product' => $product]);
    // }

    public function index()
    {
        // $category = Category::all();
        $product = DB::table('table_product')->paginate(10);

        return view('product',compact('product'));
    }
}
