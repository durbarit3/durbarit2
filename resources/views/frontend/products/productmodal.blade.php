<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic page needs
		============================================ -->
		<title>TopDeal</title>
		<meta charset="utf-8">
		<meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
		<meta name="description" content="SuperMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
		<meta name="author" content="Magentech">
		<meta name="robots" content="index, follow" />
		<!-- Mobile specific metas
		============================================ -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png" />
		<!-- Libs CSS
		============================================ -->
		<link rel="stylesheet" href="{{asset('public/frontend')}}/css/bootstrap/css/bootstrap.min.css">
		<link href="{{asset('public/frontend')}}/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/js/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/themecss/lib.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/js/minicolors/miniColors.css" rel="stylesheet">
		<!-- Theme CSS
		============================================ -->
		<link href="{{asset('public/frontend')}}/css/themecss/so_searchpro.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/themecss/so_megamenu.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/themecss/so-categories.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/themecss/so-listing-tabs.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/themecss/so-category-slider.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/themecss/so-newletter-popup.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/footer/footer1.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/header/header1.css" rel="stylesheet">
		<link id="color_scheme" href="{{asset('public/frontend')}}/css/theme.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/responsive.css" rel="stylesheet">
		<link href="{{asset('public/frontend')}}/css/quickview/quickview.css" rel="stylesheet">
		<!-- Google web fonts
		============================================ -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" type="text/css">
		<style type="text/css">
		body {
		font-family: Roboto, sans-serif;
		}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>
	<body class="loaded page-quickview">
		<div id="wrapper">
			<!-- Main Container -->
		<form id="option-choice-form">
			<div class="product-detail">
				<div id="product-quick" class="product-info">
					<div class="product-view row">
						<div class="left-content-product ">
							<div class="content-product-left class-honizol col-sm-5">
								<div class="large-image">
									<div class="box-label">
										<span class="label-product label-sale">
											-30%
										</span>
									</div>
									<img class="product-image-zoom" src="{{asset('public/uploads/products/thumbnail/productdetails/'.$productdetails->thumbnail_img)}}" data-zoom-image="image/catalog/demo/product/travel/2.jpg" title="Canada Travel One or Two European Facials at Studio" alt="Canada Travel One or Two European Facials at Studio">
								</div>
								<div id="thumb-slider" class="full_slider category-slider-inner products-list yt-content-slider" data-rtl="no" data-autoplay="no" data-pagination="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="3" data-items_column1="3" data-items_column2="3" data-items_column3="3" data-items_column4="2" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">

									<div class="image-additional">
										<a data-index="0" class="img thumbnail" data-image="{{asset('public/frontend')}}/image/catalog/demo/product/travel/2.jpg" title="Canada Travel One or Two European Facials at Studio">
											<img src=" {{asset('public/frontend')}}/image/catalog/demo/product/travel/2.jpg" title="Canada Travel One or Two European Facials at Studio" alt="Canada Travel One or Two European Facials at Studio">
										</a>
									</div>
								
								</div>
							</div>
							<div class="content-product-right col-sm-7">
								<div class="title-product">
									<h1>{{$productdetails->product_name}}</h1>
								</div>
								<div class="row">
									<div class="col-sm-6 col-xs-12">
										<div class="box-review">
											<div class="rating">
												<div class="rating-box">
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
												</div>
												<a class="reviews_button" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a>
											</div>
										</div>


										<div class="product_page_price price" id="chosen_price_div">
											৳<div id="chosen_price">
											 {{$productdetails->product_price}}
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12">
										<div class="product-box-desc">
											<div class="inner-box-desc">
												<div class="model"><span>Product Code: {{$productdetails->product_sku}}</span></div>
												<div class="stock"><span>Stock</span>@if($productdetails->product_qty > 0) <i class="fa fa-check-square-o"></i>In Stock</div>
												@else
												<i class="fa fa-check-square-o"></i>Unavaliable</div>
												@endif
											</div>
										</div>
									</div>
								</div>
								<div class="short_description form-group">
									<h3>OverView</h3>
									<p></p>
								</div>
								<div id="product">
									<h3>Available Options </h3>
									@if($productdetails->product_type==1)
									<div class="form-group required ">
										<label class="control-label">Color</label>
										<div id="input-option224">
										@if (count(json_decode($productdetails->colors)) > 0)
									        @foreach (json_decode($productdetails->colors) as $key => $color)
											<div class="radio radio-type-button">
												<label>
													 <input type="radio" id="{{ $productdetails->id }}-color-{{ $key }}" name="color" value="{{ $color }}" @if($key==0) checked @endif>
													<span class="option-content-box active" data-title="{{$color}}" data-toggle="tooltip" data-original-title="" title="" style="background:{{ $color }};">
														<!-- <span class="option-name"></span> -->
													</span>
												</label>
											
											</div>
											@endforeach

									    @endif
										</div>
									</div>
									<!-- new -->
									@foreach (json_decode($productdetails->choice_options) as $key => $choice)
									<div class="form-group required ">
										<label class="control-label">{{ $choice->title }}:</label>
										<div id="input-option224">
											@foreach ($choice->options as $key => $option)
											<div class="radio radio-type-button">
												<label>
													<input id="{{ $choice->name }}-{{ $option }}" type="radio" name="{{ $choice->name }}" value="{{ $option }}" @if($key==0) checked @endif>
													<span class="option-content-box active" data-toggle="tooltip" data-original-title="" title="" style="background:#000;">
														{{ $option }}
													</span>
												</label>
											</div>
											@endforeach
											
										</div>
									</div>
									@endforeach
									@elseif($productdetails->product_type==2)
										<div class="form-group required ">
											@if($productdetails->select_upload_type==1)
											<label class="control-label">File</label>
											@elseif($productdetails->select_upload_type==2)
											<label class="control-label">Link</label>
											@endif
											<div id="input-option224">
										    </div>
									    </div>

									@elseif($productdetails->product_type==3)
										<div class="form-group required ">
											@if($productdetails->select_upload_type==1)
											<label class="control-label">File</label>
											@elseif($productdetails->select_upload_type==2)
											<label class="control-label">Link</label>
											@endif
											<label class="control-label">License Type:</label>
											<div id="input-option224">
												<label>
													<input type="hidden" name="license_type" value="{{$productdetails->license_type}}">
														 <label for="">{{$productdetails->license_type}}</label>
													</span>
												</label>
										    </div>
									    </div>
									    <div class="form-group required">
											<!-- <label class="control-label">Asif</label>
											<label class="control-label">Foysal</label> -->
											<table class="table table-striped">
											  <thead>
											    <tr>
											      <th>#</th>
											      <th scope="col">Duration</th>
											      <th scope="col">price</th>
											    </tr>
											  </thead>
											  <tbody>
											  	@php
											  		$pro_id=$productdetails->id;
													$linceseproduct=App\ProductLicense::where('product_id',$pro_id)->get();
											  	@endphp
											  	@foreach($linceseproduct as $key => $license)
											    <tr class="text-center">
											 
											      <td>
													<input type="radio" name="option[224]" value="{{$license}}" @if($key == 0) checked @endif>
											      </td>
											      <td>{{$license->license_duration}} Month</td>
											      <td>{{$license->license_price}} ৳</td>
											    </tr>
											    @endforeach
											  </tbody>
											</table>
									    </div>
									    @elseif($productdetails->product_type==4)
									    <div class="form-group required ">
											@if($productdetails->select_upload_type==1)
											<label class="control-label">File</label>
											@elseif($productdetails->select_upload_type==2)
											<label class="control-label">Link</label>
											@endif
											<label class="control-label">Affilient Link: </label>
											<div id="input-option224">
												<p>{{Str::limit($productdetails->affiliate_link,20)}}</p>
										    </div>
									    </div>
									@endif
								
								<div class="box-cart clearfix">
									<div class="form-group box-info-product">
										<div class="option quantity">
											<div class="input-group quantity-control" unselectable="on" style="user-select: none;">
												<input class="form-control" type="text" name="quantity" id="quantity" value="1">
												<input type="hidden" name="id" value="{{$productdetails->id}}">
												<span class="input-group-addon product_quantity_down fa fa-caret-down"></span>
												<span class="input-group-addon product_quantity_up fa fa-caret-up"></span>
											</div>
										</div>
										<div class="cart">
											<input type="button" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg ">
										</div>
										<div class="add-to-links wish_comp">
											<ul class="blank">
												<li class="wishlist">
													<a onclick="wishlist.add(108);"><i class="fa fa-heart"></i></a>
												</li>
												<li class="compare">
													<a onclick="compare.add(108);"><i class="fa fa-random"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
			<!-- //Main Container -->
		</div>
		<!-- End Color Scheme
		============================================ -->
		<!-- Include Libs & Plugins
		============================================ -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/themejs/so_megamenu.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/owl-carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/slick-slider/slick.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/themejs/libs.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/unveil/jquery.unveil.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/countdown/jquery.countdown.min.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/datetimepicker/moment.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery-ui/jquery-ui.min.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/modernizr/modernizr-2.6.2.min.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/minicolors/jquery.miniColors.min.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.nav.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/quickview/jquery.magnific-popup.min.js"></script>
		<!-- Theme files
		============================================ -->
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/themejs/application.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/themejs/homepage.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/themejs/custom_h1.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend')}}/js/themejs/addtocart.js"></script>
<script>
    $(document).ready(function() {
        $('#option-choice-form input').on('change', function() {
            getVariantPrice();
        });
    });

    function getVariantPrice() {
        //alert("success");
        if ($('#option-choice-form input[id=quantity]').val() > 0) {

            $.ajax({
                type: "GET",
                url: '{{ route('products.variant_price')}}',
                data: $('#option-choice-form').serializeArray(),
                success: function(data) {

                    //console.log(data.price);
                    // $('#option-choice-form #chosen_price_div').removeClass('d-none');
                    $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                    // $('#available-quantity').html(data.quantity);
                }
            });
        }
    }
</script>
	</body>
</html>