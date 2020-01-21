<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\ThemeSelector;
use Illuminate\Http\Request;
use App\Product;
use App\Color;

class FrontendController extends Controller
{
    // Frontend showing page

    public function index ()
    {
        foreach(ThemeSelector::where('status',1)->get() as $themeselector){

            return view($themeselector->theme_name);
        }
    }

    // About us page show

    public function aboutus()
    {
        return view('frontend.aboutus.aboutus1');
    }

    // Category page show

    public function product()
    {
        return view('frontend.products.products');
    }

    // Product Details page show

    public function productDetails($id)
    {    $productdetails=Product::where('id',$id)->first();
        return view('frontend.products.product_details',compact('productdetails'));
        
    }


    // Product Checkout page show
    public function checkout()
    {
        return view('frontend.shopping.checkout');
    }
    // Product compare page show
    public function productCompare()
    {
        return view('frontend.shopping.product_compare');
    }
    // Product wishlist page show
    
    public function productWishlist()
    {
        return view('frontend.shopping.wishlist');
    }

    // Customer Login page show
    public function customerLogin ()
    {
        return view('frontend.accounts.login');
    }

     
    // Customer Register page show
    public function customerRegister ()
    {
        return view('frontend.accounts.register');
    }
    
    // Customer Account page show
    public function customerAccount ()
    {
        return view('frontend.accounts.account');
    }

    // customer Order page show
    public function customerOrder ()
    {
        return view('frontend.accounts.order_history');
    }

    
    // customer Order information page show
    public function customerOrderInfo ()
    {
        return view('frontend.accounts.order_information');
    }

    // Customer Order Return page show
    public function customerOrderReturn ()
    {
        return view('frontend.accounts.product_return');
    }

    // Customer gift voucher Return page show
    public function customerGiftVoucher ()
    {
        return view('frontend.accounts.gift_voucher');
    }

    // product view single
     // modal
   public function productmodal($id){
    $productdetails=Product::where('id',$id)->first();
    return view('frontend.products.productmodal',compact('productdetails'));
   }

   // price show variant wise
   public function provarient(Request $request){
        //echo "ok";
      
         $product = Product::find($request->id);
      
        $str = '';
        $quantity = 0;

        if($request->has('color')){
            $data['color'] = $request['color'];
            $str = Color::where('color_code', $request['color'])->first()->color_name;
        }

        foreach (json_decode(Product::find($request->id)->choice_options) as $key => $choice) {
            if($str != null){
                $str .= '-'.str_replace(' ', '', $request[$choice->name]);
            }
            else{
                $str .= str_replace(' ', '', $request[$choice->name]);
            }
        }

        if($str != null){
            $price = json_decode($product->variations)->$str->price;
            
        }
        else{
            $price = $product->product_price;
        }
        return array('price' => $price);
    }

     
     

     
}
