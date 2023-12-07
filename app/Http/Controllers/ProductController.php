<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
    public function CreateProduct()
    {
        return view('create');
    }
    public function InsertProduct(Request $request)
    {
        // return $request;
        DB::table('products')->insert([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price
        ]);
        //  return response('create product successfully');
        return redirect()->route('product.show');

    }
    public function ShowProduct()
    {
       $products = DB::table('products')->get(); 
    //    return $products;
    return view('list',compact('products'));
    }
    public function EditProduct($id)
    {
        $p = DB::table('products')->where('id',$id)->first();
        return view('edit',compact('p'));
    }
    public function updateProduct(Request $request,$id)
    {
        DB::table('products')->where('id',$id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);
        // return response('update product successfully');
        return redirect()->route('product.show');
    }
    public function deleteproduct($id)
    {
         DB::table('products')->where('id',$id)->delete();
        return redirect()->route('product.show');
    }
}


