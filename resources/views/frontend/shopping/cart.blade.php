@extends('layouts.websiteapp')
@section('main_content')
<div id="main_content">
<!-- Main Container  -->
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Shopping Cart</a></li>
        </ul>

        <div class="row">
            <div id="content" class="col-sm-12">
                <h1>Shopping Cart&nbsp;(0.00kg)</h1>
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
                            @foreach($usercartdatas as $usercartdata )
                            <form action="{{route('product.cart.delete')}}" method="post">
                                @csrf
                            <tr>
                                <td class="text-center"> <a href="product.html"><img src="{{asset('public/uploads/products/thumbnail/')}}/{{$usercartdata->attributes->thumbnail_img}}" alt="{{$usercartdata->name}}" title="{{$usercartdata->name}}" width="80px" height="80px" class="img-thumbnail""></a> </td>
                                    <td class=" text-left"><a href="#">{{$usercartdata->name}}</a> <br>
                                        <small>Size: M</small> </td>
                                <td class="text-left">Product {{$usercartdata->quantity}}</td>
                                <td class="text-left">
                                    <div class="input-group btn-block" style="max-width: 200px;">
                                        <input type="text" onkeyup="myUpdatecart(this)" id="{{$usercartdata->id}}"  value="{{$usercartdata->quantity}}" size="1" class="form-control">
                                        <input type="hidden"  value="{{$usercartdata->id}}" name="cartid" size="1" class="form-control">
                                        <span class="input-group-btn">
                                            <button type="submit"  data-toggle="tooltip" title="" class="btn btn-primary hidden" data-original-titl="Update"><i class="fa fa-refresh"></i></button>
                                            <button type="submit" data-toggle="tooltip" title="" class="btn btn-danger" value="{{$usercartdata->id}}" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
                                        </span></div>
                                </td>
                                <td class="text-right">${{$usercartdata->price}}</td>
                                <td class="text-right" id="carttotalpric{{$usercartdata->id}}">{{$usercartdata->quantity *$usercartdata->price}}</td>
                            </tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @php
                    $items =0;
                    $price =0;
                    $userid = Request::ip();
                    foreach(Cart::session($userid)->getContent() as $item){
                        $items += $item->quantity;
                        $price += $item->price * $items;
                    }
                @endphp
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="text-right"><strong>Sub-Total:</strong></td>
                                    <td class="text-right">$ {{$price}}</td>
                                </tr>

                                <tr>
                                    <td class="text-right"><strong>VAT (20%):</strong></td>
                                    <td class="text-right">$19.80</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Total:</strong></td>
                                    <td class="text-right"><span id="tr_product_price">${{$price}}</span></td>
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
</div>
@endsection


<script>
    function myUpdatecart(el) {

        $.post('{{ route('product.cart.update') }}', {_token: '{{ csrf_token() }}',quantity: el.value,rowid:el.id},
            function(data) {
                console.log(data);

                document.getElementById('cartdatacount').innerHTML =data.quantity;
                document.getElementById('product_price').innerHTML =data.price;
                document.getElementById('tr_product_price').row(0).innerHTML =data.price;



                if (data.quantity) {
                    toastr.success("Product Quantity Changed successfully");
                }
            });
    }

</script>

<script>
    // function cartdelete(el){
    //     $.post('{{ route('product.cart.delete') }}', {_token: '{{ csrf_token() }}',product_id: el.value},
    //         function(data) {
    //             console.log(data);

    //             document.getElementById('cartdatacount').innerHTML =data.quantity;
    //             document.getElementById('product_price').innerHTML =data.price;
    //             if (data.quantity) {
    //                 toastr.success("Product Deleted successfully !!");
    //             }
    //         });
    // }
</script>
