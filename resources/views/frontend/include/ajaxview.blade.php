    @foreach($countcartitems as $cartitems)
    
    <table class="table table-striped" style="margin-bottom:10px;">
        <tbody>
            <tr>
                <td class="text-center size-img-cart">
                    <a href="product.html"><img src="{{asset('public/frontend/image/catalog/demo/product/travel/10-54x54.jpg')}}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-thumbnail"></a>
                </td>
                <td class="text-left"><a href="product.html">{{$cartitems->name}}</a>
                    <br> - <small>Size M</small> </td>
                <td class="text-right">x1</td>
                <td class="text-right">$120.80</td>
                <td class="text-center">
                    <button onclick="myAddToCartDatadelete(this)" value="{{$cartitems->id}}" type="button" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
    
    @endforeach
    <script>
    function myAddToCartDatadelete(el) {
       
        $.post('{{ route('add.cart.delete') }}', {_token: '{{ csrf_token() }}',user_id: el.value},
            function(data) {
                if (data == 1) {
                    toastr.success("Product Delete From Cart");
                } 
               
            });
	}
	
	myAddToCartDatadelete();
</script>
                                    