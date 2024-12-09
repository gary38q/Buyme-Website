<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getallhome(){
        $produk = product::all();
        return view('home',compact('produk'));
    }

    public function getallproduct(){
        $produk = product::all();
        return view('product',compact('produk'));
    }

    public function getproduct($id){
        $produk = DB::table('products')->where('product_name','=',$id)->first();
        return view('detailproduct',compact('produk'));
    }
}
