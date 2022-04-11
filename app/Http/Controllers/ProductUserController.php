<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductUserController extends Controller
{
   /**** Product adding *****/

   public function productAdd(){
    return view('Admin.detail.productAdding');
   }

   /**** product save *****/

   public function productSave(Request $request){

       $request->validate([

              'ProductImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
 ]);

            
            $ProductName=$request->ProductName;
            $ProductPrice=$request->ProductPrice;
            $description=$request->description;
            $image=$request->file('ProductImage');


            $imageName = time().'.'.$image->extension();  
            $image->move(public_path('productimages'), $imageName);

            $product= new Product;
            
            $product->name= $ProductName;
            $product->price= $ProductPrice;
            $product->description= $description;
            $product->image=$imageName;

            $result = $product->save();
            if($result){
                return back()->with('success','product added successfully');
            }
            else{
                return back()->with('fail','product added fail');
            }


   }


}//end controller
