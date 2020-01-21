<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Product;
use App\FlashDealDetail;
use Illuminate\Http\Request;
use Cart;

class AddToCartController extends Controller
{

    // Product Add To cart

    public function addToCart(Request $request)
    {
        $product_price = $request->price;
        $product = Product::findOrFail($request->addtocart_id);

        $userid = $request->ip();

        // variation product add


        if ($product->product_type == 1) {


            $flashDealdiscounts = FlashDealDetail::where('product_id', $request->addtocart_id)->first();
            if ($flashDealdiscounts) {
                if ($flashDealdiscounts->discount_type == 1) {

                    $product_price = $product_price - $flashDealdiscounts->discount;
                } else {
                    $perdiscount = ($flashDealdiscounts->discount * $product_price) / 100;

                    $product_price = $product_price - $perdiscount;
                }
            } else {
                $product_price = $product_price;
            }

            $id = rand(5, 15);

            $add = Cart::session($userid)->add([
                'id' => $id,
                'name' => $product->product_name,
                'price' => $product_price,
                'quantity' => +1,
                'attributes' => [
                    'product_sku' => $product->product_sku,
                    'colors' => $request->productcolorname,
                    'thumbnail_img' => $product->thumbnail_img,
                ],
            ]);
            // non variation product add

        } else {
            $flashDealdiscounts = FlashDealDetail::where('product_id', $request->addtocart_id)->first();
            if ($flashDealdiscounts) {
                if ($flashDealdiscounts->discount_type == 1) {

                    $product_price = $product_price - $flashDealdiscounts->discount;
                } else {
                    $perdiscount = ($flashDealdiscounts->discount * $product_price) / 100;

                    $product_price = $product_price - $perdiscount;
                }
            } else {
                $product_price = $product_price;
            }


            $add = Cart::session($userid)->add([
                'id' => $product->id,
                'name' => $product->product_name,
                'price' => $product_price,
                'quantity' => +1,
                'attributes' => [
                    'product_sku' => $product->product_sku,
                    'colors' => $product->colors,
                    'thumbnail_img' => $product->thumbnail_img,
                ],
            ]);
        }

        $getcartdatas = Cart::session($userid)->getContent();
        $gettotal = Cart::getTotal();
        if ($add) {

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



    // product add to cart show


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
}
