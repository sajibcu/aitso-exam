<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function create()
    {
        // $products = Product::orderBy('id','desc')->get();
        return view('product');
    }

    public function product_store(Request $request)
    {
        // $products = Product::orderBy('id','desc')->get();
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        $file = $request->file('file');
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = 1;
        $product->brand_id = 1;
        $product->price = 0;
        $product->quantity = 1;
        $product->status = 1;
        $product->slug =$file->getClientOriginalName();
        $product->save();

        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());

        return view('welcome');
    }

    public function delete(Request $request) {
    	$id = $request->id;
    	$product = Product::find($id);
    	if(!is_null($product)){
    		$product->delete();
    		$msg = "Product deleted.";
    	}else {
    		$msg = "Product is not deleted";
    	}
    	
      
      return response()->json(array('msg'=> $msg), 200);
   }
}
