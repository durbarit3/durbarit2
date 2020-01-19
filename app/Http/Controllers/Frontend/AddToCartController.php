<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Cart;

class AddToCartController extends Controller
{
    public function addToCart(Request $request)
    {
        
        
        $product =Product::findOrFail($request->addtocart_id);
        $userid = $request->ip();

        $add = Cart::session($userid)->add([
            'id'=>$product->id,
            'name'=>$product->product_name,
            'price'=>$product->product_price,
            'quantity'=>$product->product_qty,
            'attributes'=>[
                'product_sku'=>$product->product_sku,
                'colors'=>$product->colors,
                'thumbnail_img'=>$product->thumbnail_img,
            ],
        ]);

       $getcartdata =Cart::getContent();

       if($add){
           return 1;
       }else{
           return 0;
       }

        
        

    }


    public function addToCartShow(Request $request)
    {
        
        $countcartitems =Cart::session($request->user_id)->getContent();
        return view('frontend.include.ajaxview',compact('countcartitems'));
    }

    public function addToCartDelete (Request $request)
    {
        
        $userid = $request->ip();

        $datadelete =Cart::session($userid)->remove($request->user_id);
        if($datadelete){
            return 1;
        }
    }
}
