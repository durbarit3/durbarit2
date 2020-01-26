   <!-- Main Container  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                        @foreach($allwishlist as $wish)
                        <tr>
                            <td class="text-center">
                                <a href=""><img src="{{asset('public/uploads/products/thumbnail/'.$wish->product->thumbnail_img)}}" alt="Burger King Japan debuts Monster  Baby Force Bralette"title="Burger King Japan debuts Monster  Baby Force Bralette" height="75px" width= "75px"></a>
                            </td>
                        <td class="text-left"><a href="product.html">{{ Str::limit($wish->product->product_name,40) }}</a></td>
                        <td class="text-left">{{$wish->product->product_sku}}</td>
                            @if($wish->product->product_qty > 0)
                            <td class="text-right">In Stock</td>
                            @else
                            <td class="text-right">Out of Stock</td>
                            @endif
                            <td class="text-right">
                                <div class="price"> <b>{{$wish->product->product_price}}</b></div>
                            </td>
                            <td class="text-right">
                                <button type="button" onclick="cart.add('106');" data-toggle="tooltip" title=""class="btn btn-primary" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                                <!-- <a  title="Remove" class="delete btn btn-danger" data-id="{{$wish->id}}"><i class="fa fa-times"></i></a> -->
                                <a href="{{url('/wishlist/delete/'.$wish->id)}}" title="Remove" class="btn btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
 </table>

<!--  <script>
    $(document).ready(function() {
       $('.delete').on('click', function(){
       var id = $(this).data('id');

       // alert(id);
        
     if(id){
        $.ajax({
        url: "{{ url('/wishlist/delete/') }}/"+id,
        type:"GET",
        dataType:"json",
        processData: false,
        success: function (data) {
            // console.log(data);
              if (data ==1){
                toastr.success("wishlist delete");
                }else{
                toastr.error("wishlist delete faild");
             }
        }
     });
        } else {
               alert('danger');
        }
    });
    });
    </script> -->