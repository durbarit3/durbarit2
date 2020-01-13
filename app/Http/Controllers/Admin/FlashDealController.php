<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\FlashDeal;
use App\FlashDealDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class FlashDealController extends Controller
{
    // insert flash deal view
    public function create()
    {
        $products = Product::select(['product_name', 'id'])->where('is_deleted', 0)->where('status', 1)->get();
        return view('admin.flash_deal.create', compact('products'));
    }
    // get product by ajax and method is here
    public function getProductsByAjax(Request $request)
    {
        $product_ids = $request->productId;
        return view('admin.flash_deal.partial.products_view', compact('product_ids'));
    }
    // flash deal insert method
    public function insert(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'product_id' => 'required'
        ]);

        // $start_date = date('d/m/Y', strtotime($request->start_date));
        // $end_date = date('d/m/Y', strtotime($request->end_date));

        $AddFlashDeal = FlashDeal::insertGetId([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        $discount = $request->discount;
        $discountType = $request->discount_type;
        $index = 0;
        foreach ($discount as $id => $value) {
            FlashDealDetail::insert([
                'flash_deal_id' => $AddFlashDeal,
                'product_id' => $id,
                'discount' => $value,
                'discount_type' => $discountType[$index],
            ]);
            $index++;
        }

        $notification = array(
            'messege' => 'Flash Deal Inserted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    // Get All Products Method
    public function index()
    {
        $flashDeals = FlashDeal::where('is_deleted', 0)->get();
        return view('admin.flash_deal.index', compact('flashDeals'));
    }
    // Change Flash Deal Status Method
    public function changeStatus($flashDeal)
    {
        $changeFlashDealStatus = FlashDeal::where('id', $flashDeal)->first();

        if ($changeFlashDealStatus->status == 1) {

            $changeFlashDealStatus->update([
                'status' => 0
            ]);

        } else {

            $changeFlashDealStatus->update([
                'status' => 1
            ]);
        }
        $notification = array(
            'messege' => 'Successfully Changed Flash Deal Status',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    // Change Flash Deal Status Method
    public function edit($flashDealId)
    {
        $flashDeal = FlashDeal::with(['flash_deal_details', 'flash_deal_details.product'])->where('id', $flashDealId)->firstOrFail();

        $products = Product::select(['id', 'product_name'])->get();
        return view('admin.flash_deal.edit', compact('flashDeal', 'products'));
    }
}
