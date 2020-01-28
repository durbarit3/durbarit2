<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Product;
use App\FlashDealDetail;
use Illuminate\Http\Request;
use Cart;

class AddToCartController extends Controller
{



    public function addToCartShow(Request $request)
    {

        $countcartitems = Cart::session($request->user_id)->getContent();
        return view('frontend.include.ajaxview', compact('countcartitems'));
    }


    // product add to cart Deleted

    public function addToCartDelete(Request $request)
    {

        $userid = $request->ip();

        $datadelete = Cart::session($userid)->remove($request->user_id);
        $getcartdatas = Cart::session($userid)->getContent();

        if ($datadelete) {
            $items = 0;
            $price = 0;

            foreach (Cart::session($userid)->getContent() as $item) {
                $items -= $item->quantity;
                $price -= $item->price * $items;
            }
        }

        return response()->json([
            'quantity' => $items,
            'price' => $price
        ]);
    }

    // Product add to view cart page


    public function productViewCart()
    {

        $userid =  \Request::getClientIp(true);

        $usercartdatas = Cart::session($userid)->getContent();

        return view('frontend.shopping.cart', compact('usercartdatas'));
    }

    // update view cart product

    public function viewCartUpdate(Request $request)
    {
        $userid =  \Request::getClientIp(true);
        $updatecart =Cart::session($userid)->update(
            $request->rowid,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity,
                ),
            )
        );

        

        if ($updatecart) {

            $items = 0;
            $price = 0;


            foreach (Cart::session($userid)->getContent() as $item) {
                $items += $item->quantity;
                $price += $item->quantity * $item->price;
            }

            return response()->json([
                'quantity' => $items,
                'price' => $price
            ]);
        } else {
            return 0;
        }
    }


    // update view cart deleted

    public function viewCartDelete(Request $request)
    {
        $userid =  \Request::getClientIp(true);
        
        $deletedproduct =Cart::session($userid)->remove($request->cartid);

        return redirect()->route('product.cart.add');
    }


    public function cuponCart()
    {
        
    }

    // test
    public function adtest(Request $request){
        return $request;
    }
}
