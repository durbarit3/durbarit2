<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Frontend showing page

    public function index ()
    {
        
        return view('frontend.home.home1');
    }

    // About us page show

    public function aboutus()
    {
        return view('frontend.aboutus.aboutus1');
    }

    // Category page show

    public function category()
    {
        return view('frontend.category.categores');
    }

    // Product Details page show

    public function productDetails()
    {
        return view('frontend.product_details.product_details');
    }

    // Add to cart page show

    public function cart()
    {
        return view('frontend.cart.cart');
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
}
