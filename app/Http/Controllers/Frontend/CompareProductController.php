<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
use App\Product;
use App\CompareProduct;
use Session;

class CompareProductController extends Controller
{



    public function productCompare()
    {   
        return view('frontend.shopping.product_compare');
    }

    
    public function necompare(Request $request,$com_id){
        $userid = $request->ip();
        $checkproduct=CompareProduct::where('product_id',$com_id)->first();
        $checkip=CompareProduct::where('ip_address',$userid)->first();
        if($checkproduct && $checkip){
            return response()->json(['checkip'=>$checkip]);
        }
        else{
            $compare=CompareProduct::insertGetId([
                'ip_address'=>$userid,
                'product_id'=>$com_id,

            ]);
            if($compare){
                return response()->json(['compare'=>$compare]);
            }
        }
           
	}

    // delete
    public function delete($id){
        $delete=CompareProduct::where('id',$id)->delete();
          if($delete){
                 $notification=array(
                'messege'=>'Compare Product Success',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification); 
             }else{
                 $notification=array(
                'messege'=>'Compare Product Faild',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification); 
             }
    }
}
