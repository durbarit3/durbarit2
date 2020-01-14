@extends('layouts.websiteapp')
@section('main_content') 
<div class="breadcrumbs">
    <div class="container">
        <div class="title-breadcrumb">
            PRODUCT COMPARISON
        </div>
        <ul class="breadcrumb-cate">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Product Comparison</a></li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="row">
        <div id="content" class="col-sm-12">
            <h1>Product Comparison</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td colspan="4"><strong>Product Details</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Product</td>
                            <td><a href="#"><strong>Bougainvilleas on Lombard Street, San Francisco, Tokyo</strong></a>
                            </td>
                            <td><a href="#"><strong>Canada Travel One or Two European Facials at Studio</strong></a>
                            </td>
                            <td><a href="#"><strong>Girly Summer Outfit Ideas To Upgrade Your Wardrobe</strong></a></td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td class="text-center"> <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/travel/10-90x90.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-thumbnail" /> </td>
                            <td class="text-center"> <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/travel/2-90x90.jpg" alt="Canada Travel One or Two European Facials at  Studio" title="Canada Travel One or Two European Facials at  Studio" class="img-thumbnail" /> </td>
                            <td class="text-center"><img src="{{asset('public/frontend/')}}/image/catalog/demo/product/fashion/2-90x90.jpg" alt="Girly Summer Outfit Ideas To Upgrade Your Wardrobe" title="Girly Summer Outfit Ideas To Upgrade Your Wardrobe" class="img-thumbnail">
                            </td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td> <strike>$122.00</strike> $108.80
                            </td>
                            <td> <strike>$122.00</strike> $86.00
                            </td>
                            <td>$122.00
                            </td>
                        </tr>
                        <tr>
                            <td>Model</td>
                            <td>Product 8</td>
                            <td>Simple Product</td>
                            <td>Product 21</td>

                        </tr>
                        <tr>
                            <td>Brand</td>
                            <td></td>
                            <td>HTC</td>
                            <td>Hewlett-Packard</td>
                        </tr>
                        <tr>
                            <td>Availability</td>
                            <td>In Stock</td>
                            <td>In Stock</td>
                            <td>In Stock</td>
                        </tr>
                        <tr>
                            <td>Rating</td>
                            <td class="rating">
                                <span class="fa fa-stack">
                                    <i class="fa fa-star fa-stack-2x"></i>
                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                </span>
                                <span class="fa fa-stack">
                                    <i class="fa fa-star fa-stack-2x"></i>
                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                </span>
                                <span class="fa fa-stack">
                                    <i class="fa fa-star fa-stack-2x"></i>
                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                </span>
                                <span class="fa fa-stack">
                                    <i class="fa fa-star fa-stack-2x"></i>
                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                </span>
                                <span class="fa fa-stack">
                                    <i class="fa fa-star fa-stack-2x"></i>
                                    <i class="fa fa-star-o fa-stack-2x"></i>
                                </span>
                                <br /> Based on 1 reviews.</td>
                            <td class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <br /> Based on 0 reviews.</td>
                            <td class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <br /> Based on 0 reviews.</td>
                        </tr>
                        <tr>
                            <td>Summary</td>
                            <td class="description">
                                Product 8 ..
                            </td>
                            <td class="description">
                                Born to be worn.</td>
                            <td class="description">
                                Product 21 ..
                            </td>
                        </tr>
                        <tr>
                            <td>Weight</td>
                            <td>5.00kg</td>
                            <td>146.40g</td>
                            <td>2.00kg</td>
                        </tr>
                        <tr>
                            <td>Dimensions (L x W x H)</td>
                            <td>0.00cm x 0.00cm x 0.00cm</td>
                            <td>0.00cm x 0.00cm x 0.00cm</td>
                            <td>0.00cm x 0.00cm x 0.00cm</td>
                        </tr>
                    </tbody>

                    <tr>
                        <td></td>
                        <td>
                            <input type="button" value="Add to Cart" class="btn btn-primary btn-block" onclick="cart.add('30', '1');" />
                            <a href="#" class="btn btn-danger btn-block">Remove</a></td>
                        <td>
                            <input type="button" value="Add to Cart" class="btn btn-primary btn-block" onclick="cart.add('30', '1');" />
                            <a href="#" class="btn btn-danger btn-block">Remove</a></td>
                        <td>
                            <input type="button" value="Add to Cart" class="btn btn-primary btn-block" onclick="cart.add('30', '1');" />
                            <a href="#" class="btn btn-danger btn-block">Remove</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection