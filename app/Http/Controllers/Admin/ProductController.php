<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\support\Str;


class ProductController extends Controller
{
    public function create()
    {
       $categories = Category::orderBy('name','asc')->get();
      $subCategories = SubCategory::orderBy('name','asc')->get();


        return view('admin.product.create',compact('categories','subCategories'));
    }

     public function store(Request $request)
      {  
 
        $product = new Product();

        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->sku_code = $request->sku_code;
        $product->cat_id = $request->cat_id;
        $product->subcat_id = $request->subcat_id;
        $product->buying_price = $request->buying_price;
        $product->regular_price = $request->regular_price;
        $product->discount_price = $request->discount_price;
        $product->qtu =$request->qtu;
        $product->product_type = $request->product_type;
        $product->description = $request->description;
        $product->product_policy = $request->peoduct_policy;
 
      if(isset($request->image)){
        $image = $request->file('image');
        $imageName = rand().'.'.$image->getClientOriginalExtension(); //243541.jpg
        $image->move('admin/category',  $imageName);
        $product->image = url('admin/product/'.$imageName);//http://127.0.0.1:8000/admin/category/243541.jpg
      }
         $product->save();
        
       toastr()->success('product created successfully');
       return redirect()->back();

    }
}
