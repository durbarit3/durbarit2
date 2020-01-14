@extends('layouts.websiteapp')
@section('main_content') 
<!-- Main Container  -->
<div class="container">
    <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Account</a></li>
        <li><a href="wishlist.html">My Wish List</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-9">
            <h2>My Wish List</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td class="text-center">Image</td>
                            <td class="text-left">Product Name</td>
                            <td class="text-left">Model</td>
                            <td class="text-right">Stock</td>
                            <td class="text-right">Unit Price</td>
                            <td class="text-right">Action</td>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td class="text-center">
                                <a href="product.html"><img src="{{asset('public/frontend/')}}/image/catalog/demo/product/spa/9.jpg"
                                        alt="Burger King Japan debuts Monster  Baby Force Bralette"
                                        title="Burger King Japan debuts Monster  Baby Force Bralette"
                                        class="img-thumbnail"></a>
                            </td>
                            <td class="text-left"><a href="product.html">Burger King Japan debuts Monster Baby Force
                                    Bralette</a></td>
                            <td class="text-left">Product 3</td>
                            <td class="text-right">In Stock</td>
                            <td class="text-right">
                                <div class="price"> <b>$80.00</b> <s>$100.00</s> </div>
                            </td>
                            <td class="text-right">
                                <button type="button" onclick="cart.add('106');" data-toggle="tooltip" title=""
                                    class="btn btn-primary" data-original-title="Add to Cart"><i
                                        class="fa fa-shopping-cart"></i></button>
                                <a href="#" data-toggle="tooltip" title="" class="btn btn-danger"
                                    data-original-title="Remove"><i class="fa fa-times"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <a href="product.html"><img src="{{asset('public/frontend/')}}/image/catalog/demo/product/travel/2.jpg"
                                        alt="Canada Travel One or Two European Facials at  Studio"
                                        title="Canada Travel One or Two European Facials at  Studio"
                                        class="img-thumbnail"></a>
                            </td>
                            <td class="text-left"><a href="product.html">Canada Travel One or Two European Facials at
                                    Studio</a></td>
                            <td class="text-left">Simple Product</td>
                            <td class="text-right">In Stock</td>
                            <td class="text-right">
                                <div class="price"> <b>$70.00</b> <s>$100.00</s> </div>
                            </td>
                            <td class="text-right">
                                <button type="button" onclick="cart.add('108');" data-toggle="tooltip" title=""
                                    class="btn btn-primary" data-original-title="Add to Cart"><i
                                        class="fa fa-shopping-cart"></i></button>
                                <a href="#" data-toggle="tooltip" title="" class="btn btn-danger"
                                    data-original-title="Remove"><i class="fa fa-times"></i></a></td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="buttons clearfix">
                <div class="pull-right"><a href="#" class="btn btn-primary">Continue</a></div>
            </div>
        </div>
        <aside class="col-md-3 content-aside right_column sidebar-offcanvas">
            <span id="close-sidebar" class="fa fa-times"></span>
            <div class="module">
                <h3 class="modtitle"><span>My Wish List </span></h3>
                <div class="module-content custom-border">
                    <ul class="list-box">

                        <li><a href="#">My Account </a></li>

                        <li><a href="#">Edit Account </a></li>
                        <li><a href="#">Password </a></li>

                        <li><a href="#">Address Book </a></li>
                        <li><a href="wishlist.html">Wish List </a></li>
                        <li><a href="#">Order History </a></li>
                        <li><a href="#">Downloads </a></li>
                        <li><a href="#">Recurring payments </a></li>
                        <li><a href="#">Reward Points </a></li>
                        <li><a href="#">Returns </a></li>
                        <li><a href="#">Transactions </a></li>
                        <li><a href="#">Newsletter </a></li>

                        <li><a href="#">Logout </a></li>

                    </ul>
                </div>
            </div>
        </aside>
    </div>
</div>

@endsection