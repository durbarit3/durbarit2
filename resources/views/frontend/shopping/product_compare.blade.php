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
                            <th>Product name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Brand</th>
                            <th>Availability</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $userid =\Request::getClientIp(true);
                            $cartCollection=App\CompareProduct::where('ip_address',$userid)->get();
                        @endphp
                     @foreach($cartCollection as $product)
                         <tr>
                            <td>{{Str::limit($product->product->product_name,40)}}</td>
                            <td>
                            <img src="{{asset('public/uploads/products/thumbnail/'.$product->product->thumbnail_img)}}" height="55px">
                            </td>
                            <td>{{$product->product->product_price}}</td>
                            <td>in Stock({{$product->product->product_qty}})</td>
                            <td>
                            <input type="button" value="Add to Cart" class="btn btn-primary btn-block" onclick="cart.add('30', '1');" />
                            <a href="{{url('product/compare/delete/'.$product->id)}}" class="btn btn-danger btn-block">Remove</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                  
                </table>
            </div>
        </div>
    </div>
</div>
@endsection