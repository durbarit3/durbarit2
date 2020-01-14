@extends('layouts.websiteapp')
@section('main_content') 

<!-- Main Container  -->
<div class="container">
    <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Shopping Cart</a></li>
    </ul>

    <div class="row">
        <div id="content" class="col-sm-12">
            <h1>Shopping Cart&nbsp;(0.00kg)
            </h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td class="text-center">Image</td>
                            <td class="text-left">Product Name</td>
                            <td class="text-left">Model</td>
                            <td class="text-left">Quantity</td>
                            <td class="text-right">Unit Price</td>
                            <td class="text-right">Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"> <a href="product.html"><img src="{{asset('public/frontend/')}}/image/catalog/demo/product/travel/10-80x80.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-thumbnail""></a> </td>
								<td class=" text-left"><a href="#">Bougainvilleas on Lombard Street, San Francisco, Tokyo</a> <br>
                                    <small>Size: M</small> </td>
                            <td class="text-left">Product 8</td>
                            <td class="text-left">
                                <div class="input-group btn-block" style="max-width: 200px;">
                                    <input type="text" name="quantity[315]" value="1" size="1" class="form-control">
                                    <span class="input-group-btn">
                                        <button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-titl="Update"><i class="fa fa-refresh"></i></button>
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="cart.remove('315');" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
                                    </span></div>
                            </td>
                            <td class="text-right">$120.80</td>
                            <td class="text-right">$120.80</td>
                        </tr>
                        <tr>
                            <td class="text-center"> <a href="product.html"><img src="{{asset('public/frontend/')}}/image/catalog/demo/product/travel/2-80x80.jpg" alt="Canada Travel One or Two European Facials at  Studio" title="Canada Travel One or Two European Facials at  Studio" class="img-thumbnail""></a> </td>
								<td class=" text-left"><a href="#">Canada Travel One or Two European Facials at Studio</a><br>
                                    <small>Size: M</small>
                            </td>
                            <td class="text-left">Product 8</td>
                            <td class="text-left">
                                <div class="input-group btn-block" style="max-width: 200px;">
                                    <input type="text" name="quantity[315]" value="2" size="1" class="form-control">
                                    <span class="input-group-btn">
                                        <button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-titl="Update"><i class="fa fa-refresh"></i></button>
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="cart.remove('315');" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
                                    </span></div>
                            </td>
                            <td class="text-right">$86.00</td>
                            <td class="text-right">$172.00</td>
                        </tr>
                        <tr>
                            <td class="text-center"> <a href="product.html"><img src="{{asset('public/frontend/')}}/image/catalog/demo/product/fashion/2-80x80.jpg" alt="Girly Summer Outfit Ideas To Upgrade Your Wardrobe" title="Girly Summer Outfit Ideas To Upgrade Your Wardrobe" class="img-thumbnail"></a> </td>
                            <td class="text-left"><a href="#">Girly Summer Outfit Ideas To Upgrade Your Wardrobe</a><br>
                                <small>Size: L</small>
                            </td>
                            <td class="text-left">Product 5</td>
                            <td class="text-left">
                                <div class="input-group btn-block" style="max-width: 200px;">
                                    <input type="text" name="quantity[315]" value="1" size="1" class="form-control">
                                    <span class="input-group-btn">
                                        <button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-titl="Update"><i class="fa fa-refresh"></i></button>
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="cart.remove('315');" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
                                    </span></div>
                            </td>
                            <td class="text-right">$128.00</td>
                            <td class="text-right">$128.00</td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <h2>What would you like to do next?</h2>
            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">Use Coupon Code <i class="fa fa-caret-down"></i></a></h4>
                    </div>
                    <div id="collapse-coupon" class="panel-collapse collapse">
                        <div class="panel-body">
                            <label class="col-sm-2 control-label" for="input-coupon">Enter your coupon here</label>
                            <div class="input-group">
                                <input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control">
                                <span class="input-group-btn">
                                    <input type="button" value="Apply Coupon" id="button-coupon" data-loading-text="Loading..." class="btn btn-primary">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#collapse-voucher" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">Use Gift Certificate <i class="fa fa-caret-down"></i></a></h4>
                    </div>
                    <div id="collapse-voucher" class="panel-collapse collapse">
                        <div class="panel-body">
                            <label class="col-sm-2 control-label" for="input-voucher">Enter your gift certificate code here</label>
                            <div class="input-group">
                                <input type="text" name="voucher" value="" placeholder="Enter your gift certificate code here" id="input-voucher" class="form-control">
                                <span class="input-group-btn">
                                    <input type="submit" value="Apply Gift Certificate" id="button-voucher" data-loading-text="Loading..." class="btn btn-primary">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="text-right"><strong>Sub-Total:</strong></td>
                                <td class="text-right">$99.00</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Eco Tax (-2.00):</strong></td>
                                <td class="text-right">$2.00</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>VAT (20%):</strong></td>
                                <td class="text-right">$19.80</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Total:</strong></td>
                                <td class="text-right">$120.80</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="buttons clearfix">
                <div class="pull-left"><a href="index.html" class="btn btn-default">Continue Shopping</a></div>
                <div class="pull-right"><a href="checkout.html" class="btn btn-primary">Checkout</a></div>
            </div>
        </div>


    </div>

</div>
@endsection