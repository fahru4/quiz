<?php

namespace App\Http\Controllers;
use App\Product_detail;

use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index(){
        $detaill = Product_detail::all();

       } 
}
