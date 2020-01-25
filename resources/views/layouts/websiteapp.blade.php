<!DOCTYPE html>
<html lang="en">

<head>

	<title>TopDeal</title>
	<meta charset="utf-8">
	<meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
	<meta name="description" content="SuperMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
	<meta name="author" content="Magentech">

	<meta name="robots" content="index, follow" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="robots" content="index, follow" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">


	<link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png" />

	<!-- Include all css for home page ============================================ -->

		@foreach(App\ThemeSelector::where('status',1)->get() as $css)
			@include($css->css_name)
		@endforeach

</head>

<body class="common-home res layout-1">
	<div id="wrapper" class="wrapper-fluid banners-effect-10">

		<!-- Include all header file for home page one ============================================ -->

		@foreach(App\ThemeSelector::where('status',1)->get() as $header)
			@include($header->header_name)
		@endforeach

		<!-- Include all header login option for home page one ============================================ -->
		@include('frontend.include.login.home1')

		<!-- Include navigation option for home page ============================================ -->

		@if(App\ThemeSelector::where('status',1)->first()->header_name !='frontend.include.header.home2')
			@include('frontend.include.navigation.home1')
		@else
			''
		@endif

		<!-- main content start from here ============================================ -->

		@yield('main_content')

	</div>

	<!-- Include footer option for home page one ============================================ -->

	@foreach(App\ThemeSelector::where('status',1)->get() as $footer)
		@include($footer->footer_name)
	@endforeach

	</div>
	<div class="back-to-top"><i class="fa fa-angle-up"></i></div>

	<!-- Include all js for home page one ============================================ -->

	@foreach(App\ThemeSelector::where('status',1)->get() as $js)
			@include($js->js_name)
	@endforeach
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script>
            @if(Session::has('messege'))
            var type="{{Session::get('alert-type','info')}}"
            switch(type){
                    case 'info':
                           toastr.info("{{ Session::get('messege') }}");
                    break;
                    case 'success':
                           toastr.success("{{ Session::get('messege') }}");
                    break;
                    case 'warning':
                            toastr.warning("{{ Session::get('messege') }}");
                    break;
                    case 'error':
                            toastr.error("{{ Session::get('messege') }}");
                    break;
            }
        @endif
</script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.mywishlist').on('click', function(){
         var id = $(this).data('id');
             //alert(id);
        if(id){
            $.ajax({
                url: "{{ url('/product/add/wishlist/') }}/"+id,
                type:"GET",
                dataType:"json",
                processData: false,
                 success: function (data) {
                    console.log(data);
             if (data.check){
                 toastr.error("Already This Product Add wishlist");
            }else{
                 toastr.success("Product Add To wishlist");
                }
            }
         });
     } else {
         alert('danger');
     }
    });
});
</script>
<script>
     $(document).ready(function() {
        $('.compareproduct').on('click', function(){
            var com_id = $(this).val();
            $.ajax({
                type:'GET',
                url:"{{ url('/product/compare') }}/"+com_id,
                processData: false,
                success: function (data) {
                    if (data.checkip){
                        toastr.error("Already This Product Add Compare");
                        
                    }else{
                        toastr.success("product add to compare");
                       
                        }

                }
             });

        
    });
});
    </script>
</body>

</html>
