<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class FlashDealController extends Controller
{
    public function create()
    {
        $products = Product::select(['product_name', 'id'])->where('is_deleted', 0)->where('status', 1)->get();
        return view('admin.flash_deal.create', compact('products'));
    }
}
