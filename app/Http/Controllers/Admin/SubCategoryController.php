<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\support\Str;
class SubCategoryController extends Controller
{
   public function create()
   {
       $categories = Category::orderBy('name','asc')->get();
       return view('admin.subcategory.create',compact('categories'));
   }

   public function store(Request $request)
   {
    $subcategory = new SubCategory();
    $subcategory->cat_id = $request->cat_id;
    $subcategory->name = $request->name;
    $subcategory->slug = Str::slug($request->name);

    $subcategory->save();

    toastr()->success('SubCategory Create Successfully');
    return redirect()->back();
   }
   public function list()
   {
    $subCategories = SubCategory::with('category')->get();

    return view('admin.subcategory.list',compact('subCategories'));
   }

   public function edit($id)
   {
   
   $subcategory = SubCategory::find($id);
   $categories = Category::orderBy('name','asc')->get();
   return view('admin.subcategory.edit',compact('categories','subcategory'));

   }

   public function update(Request $request,$id)
   {
    $subcategory = SubCategory::find($id);
    $subcategory->cat_id = $request->cat_id;
    $subcategory->name = $request->name;
    $subcategory->slug = Str::slug($request->name);

    $subcategory->save();

    toastr()->success('SubCategory Updated Successfully');
    return redirect('/manage/subCategory-list');
    }

    public function delete($id)
    {
      $subCategory = SubCategory::find($id);
      
      $subCategory->delete();
      toastr()->success('SubCategory delete Successfully');
      return redirect()->back();

    }
}
