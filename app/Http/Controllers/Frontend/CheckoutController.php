<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Auth;
use App\User;
use App\Cupon;
use App\DatabaseStorageModel;
use App\OrderPlace;
use App\OrderStorage;
use App\Product;
use App\ShippingAddress;
use App\UserAddress;
use App\UserUsedCupon;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Cart;
use Illuminate\Foundation\Console\Presets\React;

class CheckoutController extends Controller
{
    // show checkout controller

    public function checkoutshow()
    {
        if (Auth::check()) {
            $order_id = rand(100, 100000);
            return view('frontend.shopping.checkout', compact('order_id'));
        } else {

            return view('frontend.accounts.checkout_login');
        }
    }

    public function CustomerLogin()
    {
        return view('frontend.accounts.checkout_login');
    }



    public function authenticate(Request $request)
    {

        $admin = User::where('email', request('email'))->first();
        if ($admin) {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {

                return redirect()->intended(route('checkout.page.show'));
            }
        } else {
            session()->flash('successMsg', 'Sorry !! Email or Password not matched!');
            return redirect()->route('checkout.login.show');
        }
    }




    public function applyCupon(Request $request)
    {



        if (Cupon::where('cupon_code', $request->cuponvalue)->exists()) {
            $cuponuser = Cupon::where('cupon_code', $request->cuponvalue)->first();

            if (UserUsedCupon::where('cupon_id', $cuponuser->id)->where('user_ip', Auth::user()->id)->doesntExist()) {

                if (Cupon::where('cupon_code', $request->cuponvalue)->first()->cupon_type == 1) {

                    $userid =  \Request::getClientIp(true);
                    $cartdata = Cart::session($userid)->getContent();
                    $carttotal = Cart::session($userid)->getTotal();

                    $cuponminimum = Cupon::where('cupon_code', $request->cuponvalue)->first()->minimum_shopping;
                    if ($cuponminimum <= $carttotal) {
                        UserUsedCupon::insert([
                            'user_ip' => Auth::user()->id,
                            'cupon_id' => $cuponuser->id,
                            'order_id' => $request->order,
                            'created_at' => Carbon::now(),
                        ]);
                        return "Cupon insert sussefull!";
                    } else {
                        return "Your minimum purchese is less than minimum shopping criteria";
                    }
                } else {
                    $userid =  \Request::getClientIp(true);
                    $carttotal = Cart::session($userid)->getTotal();
                    $cartdatas = Cart::session($userid)->getContent();

                    $cuponminproducts = Cupon::where('cupon_code', $request->cuponvalue)->first()->product_id;
                    $cupondiscounts = Cupon::where('cupon_code', $request->cuponvalue)->first();

                    foreach ($cartdatas as $cartdata) {
                        foreach (json_decode($cuponminproducts) as $cuponminproduct) {



                            if ($cartdata->attributes->product_id == $cuponminproduct) {
                                UserUsedCupon::insert([
                                    'user_ip' => Auth::user()->id,
                                    'cupon_id' => $cuponuser->id,
                                    'order_id' => $request->order,
                                    'created_at' => Carbon::now(),
                                ]);

                                return "Cupon Insert Sussesfully!";
                            } else {
                                return "No Cupon Available";
                            }
                        }
                    }
                }
            } else {
                return "You are alrady used this cupon";
            }
        } else {
            return "No Cupon Available On this code.";
        }
    }


    public function orderSubmit(Request $request)
    {

        $validatedData = $request->validate([
            'user_id' => 'required',
            'user_address' => 'required',
            'user_post_office' => 'required',
            'user_postcode' => 'required',
            'user_country_id' => 'required',
            'user_division_id' => 'required',
            'user_district_id' => 'required',
            'user_upazila_id' => 'required',
            'shipping_id' => 'required',
            'payment_method_id' => 'required',
            'comment' => 'required',

        ]);


        $usseraddress_id = UserAddress::insertGetId([
            'user_id' => $request->user_id,
            'user_address' => $request->user_address,
            'user_post_office' => $request->user_post_office,
            'user_postcode' => $request->user_postcode,
            'user_country_id' => $request->user_country_id,
            'user_division_id' => $request->user_division_id,
            'user_district_id' => $request->user_district_id,
            'user_upazila_id' => $request->user_upazila_id,
            'is_shipping_address' => $request->is_shipping_address,
            'created_at' => Carbon::now(),
        ]);


        if (UserAddress::findOrFail($usseraddress_id)->is_shipping_address == NULL) {
            ShippingAddress::insert([
                'shipping_user_id' => $request->shipping_user_id,
                'shipping_address' => $request->shipping_customer_address,
                'shipping_post_office' => $request->shipping_post_office,
                'shipping_postcode' => $request->shipping_postcode,
                'shipping_country_id' => $request->shipping_country_id,
                'shipping_division_id' => $request->shipping_division_id,
                'shipping_district_id' => $request->shipping_district_id,
                'shipping_upazila_id' => $request->shipping_upazila_id,
                'order_id' => $request->order_id,
                'created_at' => Carbon::now(),
            ]);
        }


        $userid =  \Request::getClientIp(true) . '_cart_items';
        $purchase_key = DatabaseStorageModel::findOrFail($userid)->purchase_key;


        OrderPlace::insert([
            'shipping_id' => $request->shipping_id,
            'payment_method_id' => $request->payment_method_id,
            'comment' => $request->comment,
            'order_id' => $request->order_id,
            'user_id' => Auth::user()->id,
            'cart_id' => $purchase_key,
            'total_price' => $request->total_price,
            'total_quantity' => $request->total_quantity,
            'created_at' => Carbon::now(),
        ]);

        $purchase_key = DatabaseStorageModel::findOrFail($userid)->delete();




        return OrderStorage::where('purchase_key', $purchase_key)->first()->cart_data;
    }


    public function userCountrySubmit($id)
    {

        $divisions = DB::table('divisions')->where('country_id', $id)->get();
        return response()->json($divisions);
    }

    public function userDivisionSubmit($id)
    {
        $divisions = DB::table('districts')->where('division_id', $id)->get();
        return response()->json($divisions);
    }

    public function userUpazilaSubmit($id)
    {

        $divisions = DB::table('upazilas')->where('district_id', $id)->get();
        return response()->json($divisions);
    }


    public function orderData()
    {
        $userid =  \Request::getClientIp(true);

        $usercartdatas = Cart::session($userid)->getContent();


        return view('frontend.shopping.orderajaxdata', compact('usercartdatas'));
    }

    public function orderDataUpdate(Request $request)
    {
        $userid =  \Request::getClientIp(true);
        $updatecart = Cart::session($userid)->update(
            $request->rowid,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity,
                ),
            )
        );



        if ($updatecart) {



            $userid =  \Request::getClientIp(true);

            $usercartdatas = Cart::session($userid)->getContent();


            // return view('frontend.shopping.cartajaxdata', compact('usercartdatas'));
            return view('frontend.shopping.orderajaxdata', compact('usercartdatas'));
        } else {
            return 0;
        }
    }


    // Order Place delete
    public function orderDataDelete(Request $request)
    {
        $userid =  \Request::getClientIp(true);
        $datadelete = Cart::session($userid)->remove($request->user_id);
        $usercartdatas = Cart::session($userid)->getContent();
        return view('frontend.shopping.orderajaxdata', compact('usercartdatas'));
    }
}
