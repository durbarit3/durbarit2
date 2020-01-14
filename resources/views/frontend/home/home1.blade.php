@extends('layouts.websiteapp')
@section('main_content')  
<div class="so-page-builder">
    <div class="container page-builder-ltr">
        <div class="row row_a90w  row-style ">

            <!-- Include all categores for home page one ============================================ -->
            @include('frontend.include.sidemenu.home1')

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_anla  slider-right">
                <div class="row row_ci4f  ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_dg1b block block_1">
                        <div class="module sohomepage-slider so-homeslider-ltr  ">
                            <div class="modcontent">
                                <div id="sohomepage-slider1">
                                    <div class="so-homeslider yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="yes" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                        <div class="item">
                                            <a href=" #   " title="slide 1 - 1" target="_self">
                                                <img class="responsive" <img src="{{asset('public/frontend/')}}/image/catalog/demo/slider/home1/slider.jpg" alt="slide 1 - 1">
                                            </a>
                                            <div class="sohomeslider-description">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <a href=" #   " title="slide 1 - 2" target="_self">
                                                <img class="responsive" src="{{asset('public/frontend/')}}/image/catalog/demo/slider/home1/slider-2.jpg" alt="slide 1 - 2">
                                            </a>
                                            <div class="sohomeslider-description">
                                            </div>
                                        </div>
                                        <div class="item">
                                            <a href=" #   " title="slide 1 - 3" target="_self">
                                                <img class="responsive" src="{{asset('public/frontend/')}}/image/catalog/demo/slider/home1/slider-3.jpg" alt="slide 1 - 3">
                                            </a>
                                            <div class="sohomeslider-description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_hmsd block block_2">
                        <div class="home1-banner-1 clearfix">
                            <div class="item-1 col-lg-6 col-md-6 col-sm-6 banners">
                                <div>
                                    <a title="Static Image" href="#"><img src="{{asset('public/frontend/')}}/image/catalog/demo/banners/home1/bn-1.jpg" alt="Static Image"></a>
                                </div>
                            </div>
                            <div class="item-2 col-lg-6 col-md-6 col-sm-6 banners">
                                <div>
                                    <a title="Static Image" href="#"><img src="{{asset('public/frontend/')}}/image/catalog/demo/banners/home1/bn-2.jpg" alt="Static Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="box-link1" class="section-style">
        <div class="container page-builder-ltr">
            <div class="row row-style row_a1">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_a1c  block block_3 title_neo1">
                    <div class="module so-deals-1tr home1_deals so-deals">
                        <div class="head-title">
                            <h2 class="modtitle font-ct">
                                <span>Hot Deals</span>
                            </h2>
                            <div class="cs-item-timer">
                                <div class="Countdown-1"></div>
                            </div>
                        </div>
                        <div class="modcontent">
                            <div class="so-deal modcontent products-list grid clearfix clearfix preset00-3 preset01-3 preset02-2 preset03-2 preset04-1  button-type1  style2">
                                <div class="category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="3" data-items_column0="3" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                    <div class="item">
                                        <div class="transition product-layout">
                                            <div class="product-item-container ">
                                                <div class="left-block so-quickview">
                                                    <div class="image">
                                                        <a href="product.html" target="_self">
                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/travel/10-370x370.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
                                                        </a>
                                                        <div class="text-location"><span>Thailand</span></div>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">Sale</span>
                                                    </div>
                                                    <div class="button-group">
                                                        <div class="button-inner so-quickview">
                                                            <a class="lt-image hidden" data-product="35" href="#" target="_self" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo">
                                                            </a>
                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe"> <i class="fa fa-search"></i> </a>
                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('35');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></button>
                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('35');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('35');" data-original-title="Add to Cart"> <span class="hidden">Add to Cart</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4><a href="product.html" target="_self" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo">Bougainvilleas on Lombard Street, San Francisco, Tokyo</a></h4>
                                                        <div class="total-price clearfix">
                                                            <div class="price price-left">
                                                                <span class="price-new">$108.80</span>
                                                                <span class="price-old">$122.00</span>
                                                            </div>
                                                            <div class="price-sale price-right">
                                                                <span class="discount">
                                                                    -11%
                                                                    <strong>OFF</strong>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="transition product-layout">
                                            <div class="product-item-container ">
                                                <div class="left-block so-quickview">
                                                    <div class="image">
                                                        <a href="#" target="_self">
                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/travel/2-370x370.jpg" alt="Canada Travel One or Two European Facials at  Studio" class="img-responsive">
                                                        </a>
                                                        <div class="text-location"><span>Ha Lan</span></div>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">Sale</span>
                                                    </div>
                                                    <div class="button-group">
                                                        <div class="button-inner so-quickview">
                                                            <a class="lt-image hidden" data-product="35" href="#" target="_self" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo">
                                                            </a><a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe"><i class="fa fa-search"></i></a>
                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('35');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></button>
                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('35');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('35');" data-original-title="Add to Cart"> <span class="hidden">Add to Cart</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4><a href="product.html" target="_self" title="Canada Travel One or Two European Facials at  Studio">Canada Travel One or Two European Facials at Studio</a></h4>
                                                        <div class="total-price clearfix">
                                                            <div class="price price-left">
                                                                <span class="price-new">$86.00</span>
                                                                <span class="price-old">$122.00</span>
                                                            </div>
                                                            <div class="price-sale price-right">
                                                                <span class="discount">
                                                                    -30%
                                                                    <strong>OFF</strong>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="transition product-layout">
                                            <div class="product-item-container ">
                                                <div class="left-block so-quickview">
                                                    <div class="image">
                                                        <a href="product.html" target="_self">
                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/travel/5-370x370.jpg" alt="Chicago Tour Departure / Pattaya / Solimania..." class="img-responsive">
                                                        </a>
                                                        <div class="text-location"><span>Canada</span></div>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">Sale</span>
                                                    </div>
                                                    <div class="button-group">
                                                        <div class="button-inner so-quickview">
                                                            <a class="lt-image hidden" data-product="35" href="#" target="_self" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo">
                                                            </a><a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe"><i class="fa fa-search"></i></a>
                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('35');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></button>
                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('35');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('35');" data-original-title="Add to Cart"> <span class="hidden">Add to Cart</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4><a href="product.html" target="_self" title="Chicago Tour Departure / Pattaya / Solimania/ Tokyo/ Canada">Chicago Tour Departure / Pattaya / Solimania...</a></h4>
                                                        <div class="total-price clearfix">
                                                            <div class="price price-left">
                                                                <span class="price-new">$108.80</span>
                                                                <span class="price-old">$122.00</span>
                                                            </div>
                                                            <div class="price-sale price-right">
                                                                <span class="discount">
                                                                    -11%
                                                                    <strong>OFF</strong>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="home1-banner-2 clearfix">
                            <div class="item-1 col-lg-6 col-md-6 col-sm-6 banners">
                                <div>
                                    <a title="Static Image" href="#"><img src="{{asset('public/frontend/')}}/image/catalog/demo/banners/home1/bn-3.jpg" alt="Static Image"></a>
                                </div>
                            </div>
                            <div class="item-2 col-lg-6 col-md-6 col-sm-6 banners">
                                <div>
                                    <a title="Static Image" href="#"><img src="{{asset('public/frontend/')}}/image/catalog/demo/banners/home1/bn-4.jpg" alt="Static Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="box-link2" class="section-style">
        <div class="container page-builder-ltr">
            <div class="row row-style row_a2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_1bi4  col-style block block_5 title_neo2">
                    <div class="module so-listing-tabs-ltr default-nav clearfix img-float label-1 home-lt1">
                        <div class="head-title font-ct">
                            <h2 class="modtitle">Spa &amp; Massage</h2>
                        </div>
                        <div class="modcontent">
                            <div id="so_listing_tabs_1" class="so-listing-tabs first-load">
                                <div class="ltabs-wrap">
                                    <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="3" data-xs="2" data-margin="0">
                                        <!--Begin Tabs-->
                                        <div class="ltabs-tabs-wrap">
                                            <span class="ltabs-tab-selected"></span>
                                            <span class="ltabs-tab-arrow">▼</span>
                                            <div class="item-sub-cat">
                                                <ul class="ltabs-tabs cf">
                                                    <li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".items-category-1"> <span class="ltabs-tab-label">Best Seller</span> </li>
                                                    <li class="ltabs-tab " data-category-id="2" data-active-content=".items-category-2"> <span class="ltabs-tab-label">New Arrivals</span> </li>
                                                    <li class="ltabs-tab " data-category-id="3" data-active-content=".items-category-3"> <span class="ltabs-tab-label">Most Rating</span> </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Tabs-->
                                    </div>

                                    <div class="wap-listing-tabs ltabs-items-container products-list grid">
                                        <!--Begin Items-->
                                        <div class="ltabs-items ltabs-items-selected items-category-1" data-total="16">
                                            <div class="ltabs-items-inner ltabs-slider">
                                                <div class="ltabs-item">
                                                    <div class="item-inner product-layout transition product-grid">
                                                        <div class="product-item-container">
                                                            <div class="left-block">
                                                                <div class="image product-image-container ">
                                                                    <a class="lt-image" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                        <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/spa/1-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                    </a>
                                                                </div>
                                                                <div class="box-label"><span class="label-product label-sale">Sale</span></div>
                                                            </div>
                                                            <div class="right-block">
                                                                <div class="caption">
                                                                    <h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
                                                                    <div class="total-price clearfix">
                                                                        <div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
                                                                        <div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="button-group">
                                                                    <div class="button-inner so-quickview">
                                                                        <a class="lt-image hidden" href="product.html" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
                                                                        <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
                                                                            <i class="fa fa-heart"></i>
                                                                        </button>
                                                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
                                                                            <i class="fa fa-exchange"></i>
                                                                        </button>
                                                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                            <span class="hidden">Add to cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-inner product-layout transition product-grid">
                                                        <div class="product-item-container">
                                                            <div class="left-block">
                                                                <div class="image product-image-container ">
                                                                    <a class="lt-image" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                        <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/spa/5-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                    </a>
                                                                </div>
                                                                <div class="box-label"><span class="label-product label-sale">Sale</span></div>
                                                            </div>
                                                            <div class="right-block">
                                                                <div class="caption">
                                                                    <h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
                                                                    <div class="total-price clearfix">
                                                                        <div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
                                                                        <div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="button-group">
                                                                    <div class="button-inner so-quickview">
                                                                        <a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
                                                                        <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
                                                                            <i class="fa fa-heart"></i>
                                                                        </button>
                                                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
                                                                            <i class="fa fa-exchange"></i>
                                                                        </button>
                                                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                            <span class="hidden">Add to cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ltabs-item">
                                                    <div class="item-inner product-layout transition product-grid">
                                                        <div class="product-item-container">
                                                            <div class="left-block">
                                                                <div class="image product-image-container ">
                                                                    <a class="lt-image" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                        <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/spa/2-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                    </a>
                                                                </div>
                                                                <div class="box-label"><span class="label-product label-sale">Sale</span></div>
                                                            </div>
                                                            <div class="right-block">
                                                                <div class="caption">
                                                                    <h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
                                                                    <div class="total-price clearfix">
                                                                        <div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
                                                                        <div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="button-group">
                                                                    <div class="button-inner so-quickview">
                                                                        <a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
                                                                        <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
                                                                            <i class="fa fa-heart"></i>
                                                                        </button>
                                                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
                                                                            <i class="fa fa-exchange"></i>
                                                                        </button>
                                                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                            <span class="hidden">Add to cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-inner product-layout transition product-grid">
                                                        <div class="product-item-container">
                                                            <div class="left-block">
                                                                <div class="image product-image-container ">
                                                                    <a class="lt-image" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                        <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/spa/6-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                    </a>
                                                                </div>
                                                                <div class="box-label"><span class="label-product label-sale">Sale</span></div>
                                                            </div>
                                                            <div class="right-block">
                                                                <div class="caption">
                                                                    <h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
                                                                    <div class="total-price clearfix">
                                                                        <div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
                                                                        <div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="button-group">
                                                                    <div class="button-inner so-quickview">
                                                                        <a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
                                                                        <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
                                                                            <i class="fa fa-heart"></i>
                                                                        </button>
                                                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
                                                                            <i class="fa fa-exchange"></i>
                                                                        </button>
                                                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                            <span class="hidden">Add to cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ltabs-item">
                                                    <div class="item-inner product-layout transition product-grid">
                                                        <div class="product-item-container">
                                                            <div class="left-block">
                                                                <div class="image product-image-container ">
                                                                    <a class="lt-image" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                        <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/spa/3-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                    </a>
                                                                </div>
                                                                <div class="box-label"><span class="label-product label-sale">Sale</span></div>
                                                            </div>
                                                            <div class="right-block">
                                                                <div class="caption">
                                                                    <h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
                                                                    <div class="total-price clearfix">
                                                                        <div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
                                                                        <div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="button-group">
                                                                    <div class="button-inner so-quickview">
                                                                        <a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
                                                                        <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
                                                                            <i class="fa fa-heart"></i>
                                                                        </button>
                                                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
                                                                            <i class="fa fa-exchange"></i>
                                                                        </button>
                                                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                            <span class="hidden">Add to cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-inner product-layout transition product-grid">
                                                        <div class="product-item-container">
                                                            <div class="left-block">
                                                                <div class="image product-image-container ">
                                                                    <a class="lt-image" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                        <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/spa/7-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                    </a>
                                                                </div>
                                                                <div class="box-label"><span class="label-product label-sale">Sale</span></div>
                                                            </div>
                                                            <div class="right-block">
                                                                <div class="caption">
                                                                    <h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
                                                                    <div class="total-price clearfix">
                                                                        <div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
                                                                        <div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="button-group">
                                                                    <div class="button-inner so-quickview">
                                                                        <a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
                                                                        <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
                                                                            <i class="fa fa-heart"></i>
                                                                        </button>
                                                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
                                                                            <i class="fa fa-exchange"></i>
                                                                        </button>
                                                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                            <span class="hidden">Add to cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ltabs-item">
                                                    <div class="item-inner product-layout transition product-grid">
                                                        <div class="product-item-container">
                                                            <div class="left-block">
                                                                <div class="image product-image-container ">
                                                                    <a class="lt-image" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                        <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/spa/4-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                    </a>
                                                                </div>
                                                                <div class="box-label"><span class="label-product label-sale">Sale</span></div>
                                                            </div>
                                                            <div class="right-block">
                                                                <div class="caption">
                                                                    <h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
                                                                    <div class="total-price clearfix">
                                                                        <div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
                                                                        <div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="button-group">
                                                                    <div class="button-inner so-quickview">
                                                                        <a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
                                                                        <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
                                                                            <i class="fa fa-heart"></i>
                                                                        </button>
                                                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
                                                                            <i class="fa fa-exchange"></i>
                                                                        </button>
                                                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                            <span class="hidden">Add to cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-inner product-layout transition product-grid">
                                                        <div class="product-item-container">
                                                            <div class="left-block">
                                                                <div class="image product-image-container ">
                                                                    <a class="lt-image" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                        <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/spa/11-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
                                                                    </a>
                                                                </div>
                                                                <div class="box-label"><span class="label-product label-sale">Sale</span></div>
                                                            </div>
                                                            <div class="right-block">
                                                                <div class="caption">
                                                                    <h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
                                                                    <div class="total-price clearfix">
                                                                        <div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
                                                                        <div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="button-group">
                                                                    <div class="button-inner so-quickview">
                                                                        <a class="lt-image hidden" href="product.html" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
                                                                        <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                            <i class="fa fa-search"></i>
                                                                        </a>
                                                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
                                                                            <i class="fa fa-heart"></i>
                                                                        </button>
                                                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
                                                                            <i class="fa fa-exchange"></i>
                                                                        </button>
                                                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                            <span class="hidden">Add to cart</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ltabs-items items-category-2 grid" data-total="16">
                                            <div class="ltabs-loading"></div>
                                        </div>
                                        <div class="ltabs-items  items-category-3 grid" data-total="16">
                                            <div class="ltabs-loading"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="box-link3" class="section-style">
        <div class="container page-builder-ltr">
            <div class="row row-style row_a3">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_nvxr  block block_6 title_neo3">
                    <div class="module so-listing-tabs-ltr home1-lt-style2 default-nav clearfix img-float home-lt1">
                        <div class="head-title font-ct">
                            <h2 class="modtitle">Fashion &amp; Accessories</h2>
                        </div>
                        <div class="modcontent">
                            <div id="so_listing_tabs_2" class="so-listing-tabs first-load">
                                <div class="ltabs-wrap">
                                    <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="3" data-md="3" data-sm="3" data-xs="2" data-margin="0">
                                        <div class="ltabs-tabs-wrap">
                                            <span class="ltabs-tab-selected">Best sellers</span>
                                            <span class="ltabs-tab-arrow">▼</span>
                                            <div class="item-sub-cat">
                                                <ul class="ltabs-tabs cf">
                                                    <li class="ltabs-tab tab-sel" data-category-id="4" data-active-content=".items-category-4">
                                                        <span class="ltabs-tab-label">Best sellers</span>
                                                    </li>
                                                    <li class="ltabs-tab" data-category-id="5" data-active-content=".items-category-5">
                                                        <span class="ltabs-tab-label">New Arrivals</span>
                                                    </li>
                                                    <li class="ltabs-tab" data-category-id="6" data-active-content=".items-category-6">
                                                        <span class="ltabs-tab-label">Most Rating</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wap-listing-tabs products-list grid">
                                        <div class="item-cat-image banners">
                                            <div>
                                                <a href="product.html" title="" target="_self">
                                                    <img class="categories-loadimage" title="" alt="" src="{{asset('public/frontend/')}}/image/catalog/demo/banners/home1/md-banner-1.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ltabs-items-container">
                                            <div class="ltabs-items ltabs-items-selected items-category-4" data-total="16">
                                                <div class="ltabs-items-inner ltabs-slider ">
                                                    <div class="ltabs-item">
                                                        <div class="item-inner product-layout transition product-grid">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="image product-image-container ">
                                                                        <a class="lt-image" href="#" target="_self" title="Amazing Yoga Sport Poses Most People Wouldn't Dream ">
                                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/fashion/10-270x270.jpg" alt="Amazing Yoga Sport Poses Most People Wouldn't Dream ">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label">
                                                                        <span class="label-product label-sale">Sale</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4>
                                                                            <a href="product.html" title="Amazing Yoga Sport Poses Most People Wouldn't Dream " target="_self">Amazing Yoga Sport Poses Most People Wouldn't Dre..</a>
                                                                        </h4>
                                                                        <div class="total-price clearfix">
                                                                            <div class="price price-left">
                                                                                <span class="price-new">$108.80</span>
                                                                                <span class="price-old">$122.00</span>
                                                                            </div>
                                                                            <div class="price-sale price-right">
                                                                                <span class="discount 123">-11%<strong>OFF</strong></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" href="#" target="_self" title="Amazing Yoga Sport Poses Most People Wouldn't Dream "></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
                                                                                <i class="fa fa-heart"></i>
                                                                            </button>
                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
                                                                                <i class="fa fa-exchange"></i>
                                                                            </button>
                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
                                                                                <span class="hidden">Add to cart</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-inner product-layout transition product-grid">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="image product-image-container ">
                                                                        <a class="lt-image" href="#" target="_self" title="Est Officia Including Shoes Beautiful Pieces Canaz">
                                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/fashion/15-270x270.png" alt="Est Officia Including Shoes Beautiful Pieces Canaz">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label">
                                                                        <span class="label-product label-sale">Sale</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4>
                                                                            <a href="product.html" title="Est Officia Including Shoes Beautiful Pieces Canaz" target="_self">Est Officia Including Shoes Beautiful Pieces Canaz</a>
                                                                        </h4>
                                                                        <div class="total-price clearfix">
                                                                            <div class="price price-left">
                                                                                <span class="price-new">$62.00</span>
                                                                                <span class="price-old">$337.99</span>
                                                                            </div>
                                                                            <div class="price-sale price-right">
                                                                                <span class="discount 123">-82%<strong>OFF</strong></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" href="#" target="_self" title="Est Officia Including Shoes Beautiful Pieces Canaz"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
                                                                                <i class="fa fa-heart"></i>
                                                                            </button>
                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
                                                                                <i class="fa fa-exchange"></i>
                                                                            </button>
                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
                                                                                <span class="hidden">Add to cart</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ltabs-item">
                                                        <div class="item-inner product-layout transition product-grid">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="image product-image-container ">
                                                                        <a class="lt-image" href="#" target="_self" title="Girly Summer Outfit Ideas To Upgrade Your Wardrobe">
                                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/fashion/2-270x270.jpg" alt="Girly Summer Outfit Ideas To Upgrade Your Wardrobe">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4>
                                                                            <a href="product.html" title="Girly Summer Outfit Ideas To Upgrade Your Wardrobe" target="_self">Girly Summer Outfit Ideas To Upgrade Your Wardrob..</a>
                                                                        </h4>
                                                                        <div class="total-price clearfix">
                                                                            <div class="price price-left">
                                                                                <span class="price-new">$128.80</span>
                                                                                <span class="price-old"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" href="#" target="_self" title="Girly Summer Outfit Ideas To Upgrade Your Wardrobe"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
                                                                                <i class="fa fa-heart"></i>
                                                                            </button>
                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
                                                                                <i class="fa fa-exchange"></i>
                                                                            </button>
                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
                                                                                <span class="hidden">Add to cart</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-inner product-layout transition product-grid">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="image product-image-container ">
                                                                        <a class="lt-image" href="#" target="_self" title="Cras idrisusiopsa quo voluptas nulla pariatur shoprer">
                                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/fashion/4-270x270.jpg" alt="Cras idrisusiopsa quo voluptas nulla pariatur shoprer">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4>
                                                                            <a href="product.html" title="Cras idrisusiopsa quo voluptas nulla pariatur shoprer" target="_self">Cras idrisusiopsa quo voluptas nulla par...</a>
                                                                        </h4>
                                                                        <div class="total-price clearfix">
                                                                            <div class="price price-left">
                                                                                <span class="price-new">$242.00</span>
                                                                                <span class="price-old"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" href="#" target="_self" title="Cras idrisusiopsa quo voluptas nulla pariatur shoprer"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
                                                                                <i class="fa fa-heart"></i>
                                                                            </button>
                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
                                                                                <i class="fa fa-exchange"></i>
                                                                            </button>
                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
                                                                                <span class="hidden">Add to cart</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ltabs-item">
                                                        <div class="item-inner product-layout transition product-grid">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="image product-image-container ">
                                                                        <a class="lt-image" href="#" target="_self" title="Invisible Hidden Spy Earphone Micro Wireless">
                                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/fashion/16-270x270.png" alt="Invisible Hidden Spy Earphone Micro Wireless">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4>
                                                                            <a href="product.html" title="Invisible Hidden Spy Earphone Micro Wireless" target="_self">Invisible Hidden Spy Earphone Micro Wireless</a>
                                                                        </h4>
                                                                        <div class="total-price clearfix">
                                                                            <div class="price price-left">
                                                                                <span class="price-new">$122.00</span>
                                                                                <span class="price-old"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" href="#" target="_self" title="Invisible Hidden Spy Earphone Micro Wireless"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
                                                                                <i class="fa fa-heart"></i>
                                                                            </button>
                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
                                                                                <i class="fa fa-exchange"></i>
                                                                            </button>
                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
                                                                                <span class="hidden">Add to cart</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-inner product-layout transition product-grid">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="image product-image-container ">
                                                                        <a class="lt-image" href="#" target="_self" title="Est Officia Including Shoes Beautiful Pieces Canaz">
                                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/fashion/24-270x270.png" alt="Est Officia Including Shoes Beautiful Pieces Canaz">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label">
                                                                        <span class="label-product label-sale">Sale</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4>
                                                                            <a href="product.html" title="Est Officia Including Shoes Beautiful Pieces Canaz" target="_self">Est Officia Including Shoes Beautiful Pieces Canaz</a>
                                                                        </h4>
                                                                        <div class="total-price clearfix">
                                                                            <div class="price price-left">
                                                                                <span class="price-new">$98.00</span>
                                                                                <span class="price-old">$122.00</span>
                                                                            </div>
                                                                            <div class="price-sale price-right">
                                                                                <span class="discount 123">-20%<strong>OFF</strong></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" href="#" target="_self" title="Est Officia Including Shoes Beautiful Pieces Canaz"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
                                                                                <i class="fa fa-heart"></i>
                                                                            </button>
                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
                                                                                <i class="fa fa-exchange"></i>
                                                                            </button>
                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
                                                                                <span class="hidden">Add to cart</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltabs-items  items-category-5 grid" data-total="16">
                                                <div class="ltabs-loading">
                                                </div>
                                            </div>
                                            <div class="ltabs-items  items-category-6 grid" data-total="16">
                                                <div class="ltabs-loading">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="box-link4" class="section-style">
        <div class="container page-builder-ltr">
            <div class="row row-style row_a4">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_mfpr  block block_7 title_neo4">
                    <div class="module so-listing-tabs-ltr home1-lt-style3 default-nav clearfix img-float home-lt1">
                        <div class="head-title font-ct">
                            <h2 class="modtitle">Travel & Vacation</h2>
                        </div>
                        <div class="modcontent">
                            <div id="so_listing_tabs_3" class="so-listing-tabs first-load">
                                <div class="ltabs-wrap">
                                    <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="3" data-md="3" data-sm="3" data-xs="2" data-margin="0">
                                        <div class="ltabs-tabs-wrap">
                                            <span class="ltabs-tab-selected">Best sellers</span>
                                            <span class="ltabs-tab-arrow">▼</span>
                                            <div class="item-sub-cat">
                                                <ul class="ltabs-tabs cf">
                                                    <li class="ltabs-tab tab-sel" data-category-id="4" data-active-content=".items-category-4">
                                                        <span class="ltabs-tab-label">Best sellers</span>
                                                    </li>
                                                    <li class="ltabs-tab" data-category-id="7" data-active-content=".items-category-7">
                                                        <span class="ltabs-tab-label">New Arrivals</span>
                                                    </li>
                                                    <li class="ltabs-tab" data-category-id="8" data-active-content=".items-category-8">
                                                        <span class="ltabs-tab-label">Most Rating</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wap-listing-tabs products-list grid">
                                        <div class="item-cat-image banners">
                                            <div>
                                                <a href="product.html" title="" target="_self">
                                                    <img class="categories-loadimage" title="" alt="" src="{{asset('public/frontend/')}}/image/catalog/demo/banners/home1/md-banner-2.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ltabs-items-container">
                                            <div class="ltabs-items ltabs-items-selected items-category-4" data-total="16">
                                                <div class="ltabs-items-inner ltabs-slider">
                                                    <div class="ltabs-item">
                                                        <div class="item-inner product-layout transition product-grid">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="image product-image-container ">
                                                                        <a class="lt-image" href="#" target="_self" title="Bougainvilleas On Lombard Street, San Francisco, Tokyo">
                                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/travel/10-270x270.jpg" alt="Bougainvilleas On Lombard Street, San Francisco, Tokyo">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label">
                                                                        <span class="label-product label-sale">Sale</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4>
                                                                            <a href="product.html" title="Bougainvilleas On Lombard Street, San Francisco, Tokyo" target="_self">Bougainvilleas On Lombard Street, San Francisco, Tokyo</a>
                                                                        </h4>
                                                                        <div class="total-price clearfix">
                                                                            <div class="price price-left">
                                                                                <span class="price-new">$108.80</span>
                                                                                <span class="price-old">$122.00</span>
                                                                            </div>
                                                                            <div class="price-sale price-right">
                                                                                <span class="discount 123">-11%<strong>OFF</strong></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" href="#" target="_self" title="Bougainvilleas On Lombard Street, San Francisco, Tokyo"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
                                                                                <i class="fa fa-heart"></i>
                                                                            </button>
                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
                                                                                <i class="fa fa-exchange"></i>
                                                                            </button>
                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
                                                                                <span class="hidden">Add to cart</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-inner product-layout transition product-grid">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="image product-image-container ">
                                                                        <a class="lt-image" href="#" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan ">
                                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/travel/8-270x270.jpg" alt="Philipin Tour Group Manila/ Pattaya / Mactan ">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label">
                                                                        <span class="label-product label-sale">Sale</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4>
                                                                            <a href="product.html" title="Philipin Tour Group Manila/ Pattaya / Mactan " target="_self">Philipin Tour Group Manila/ Pattaya / Mactan </a>
                                                                        </h4>
                                                                        <div class="total-price clearfix">
                                                                            <div class="price price-left">
                                                                                <span class="price-new">$74.00</span>
                                                                                <span class="price-old">$122.00</span>
                                                                            </div>
                                                                            <div class="price-sale price-right">
                                                                                <span class="discount 123">-40%<strong>OFF</strong></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" href="#" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan "></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
                                                                                <i class="fa fa-heart"></i>
                                                                            </button>
                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
                                                                                <i class="fa fa-exchange"></i>
                                                                            </button>
                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
                                                                                <span class="hidden">Add to cart</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ltabs-item">
                                                        <div class="item-inner product-layout transition product-grid">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="image product-image-container ">
                                                                        <a class="lt-image" href="#" target="_self" title="Burger King Japan debuts Monster Baby, Double, Canada">
                                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/travel/1-270x270.jpg" alt="Burger King Japan debuts Monster Baby, Double, Canada">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4>
                                                                            <a href="product.html" title="Burger King Japan debuts Monster Baby, Double, Canada" target="_self">Burger King Japan debuts Monster Baby, Double, Canada</a>
                                                                        </h4>
                                                                        <div class="total-price clearfix">
                                                                            <div class="price price-left">
                                                                                <span class="price-new">$1,202.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" href="#" target="_self" title="Burger King Japan debuts Monster Baby, Double, Canada"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
                                                                                <i class="fa fa-heart"></i>
                                                                            </button>
                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
                                                                                <i class="fa fa-exchange"></i>
                                                                            </button>
                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
                                                                                <span class="hidden">Add to cart</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-inner product-layout transition product-grid">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="image product-image-container ">
                                                                        <a class="lt-image" href="#" target="_self" title="Thailand Group Departure / Pattaya / Bangkok">
                                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/travel/15-270x270.jpg" alt="Thailand Group Departure / Pattaya / Bangkok">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4>
                                                                            <a href="product.html" title="Thailand Group Departure / Pattaya / Bangkok" target="_self">Thailand Group Departure / Pattaya / Bangkok</a>
                                                                        </h4>
                                                                        <div class="total-price clearfix">
                                                                            <div class="price price-left">
                                                                                <span class="price-new">$122.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" href="#" target="_self" title="Thailand Group Departure / Pattaya / Bangkok"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
                                                                                <i class="fa fa-heart"></i>
                                                                            </button>
                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
                                                                                <i class="fa fa-exchange"></i>
                                                                            </button>
                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
                                                                                <span class="hidden">Add to cart</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ltabs-item">
                                                        <div class="item-inner product-layout transition product-grid">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="image product-image-container ">
                                                                        <a class="lt-image" href="#" target="_self" title="Chicago Tour Departure / Pattaya / Solimania...">
                                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/travel/5-270x270.jpg" alt="Chicago Tour Departure / Pattaya / Solimania/ Tokyo/ Canada">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label">
                                                                        <span class="label-product label-sale">Sale</span>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4>
                                                                            <a href="product.html" title="Chicago Tour Departure / Pattaya / Solimania/ Tokyo/ Canada" target="_self">Chicago Tour Departure / Pattaya / Solimania...</a>
                                                                        </h4>
                                                                        <div class="total-price clearfix">
                                                                            <div class="price price-left">
                                                                                <span class="price-new">$108.80</span>
                                                                                <span class="price-old">$122.00</span>
                                                                            </div>
                                                                            <div class="price-sale price-right">
                                                                                <span class="discount 123">-11%<strong>OFF</strong></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" href="#" target="_self" title="Chicago Tour Departure / Pattaya / Solimania/ Tokyo/ Canada"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
                                                                                <i class="fa fa-heart"></i>
                                                                            </button>
                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
                                                                                <i class="fa fa-exchange"></i>
                                                                            </button>
                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
                                                                                <span class="hidden">Add to cart</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-inner product-layout transition product-grid">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="image product-image-container ">
                                                                        <a class="lt-image" href="#" target="_self" title="Tokyo Temple on Elevated Area Under Blue Sky and White">
                                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/travel/13-270x270.jpg" alt="Tokyo Temple on Elevated Area Under Blue Sky and White">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4>
                                                                            <a href="product.html" title="Tokyo Temple on Elevated Area Under Blue Sky and White" target="_self">Tokyo Temple on Elevated Area Under Blue Sky and White</a>
                                                                        </h4>
                                                                        <div class="total-price clearfix">
                                                                            <div class="price price-left">
                                                                                <span class="price-new">$122.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" href="#" target="_self" title="Tokyo Temple on Elevated Area Under Blue Sky and White"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
                                                                                <i class="fa fa-heart"></i>
                                                                            </button>
                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
                                                                                <i class="fa fa-exchange"></i>
                                                                            </button>
                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
                                                                                <span class="hidden">Add to cart</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltabs-items  items-category-7 grid" data-total="16">
                                                <div class="ltabs-loading">
                                                </div>
                                            </div>
                                            <div class="ltabs-items  items-category-8 grid" data-total="16">
                                                <div class="ltabs-loading">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Digital & Electronics -->
    <section id="box-link5" class="section-style">
        <div class="container page-builder-ltr">
            <div class="row row-style row_a5">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_iunl  block block_8 title_neo5">
                    <div class="module so-listing-tabs-ltr home1-lt-style4 default-nav clearfix img-float home-lt1">
                        <div class="head-title font-ct">
                            <h2 class="modtitle">
                                <span>Digital & Electronics</span>
                            </h2>
                        </div>
                        <div class="modcontent">
                            <div id="so_listing_tabs_4" class="so-listing-tabs first-load">
                                <div class="ltabs-wrap">
                                    <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="3" data-xs="2" data-margin="0">
                                        <!--Begin Tabs-->
                                        <div class="ltabs-tabs-wrap">
                                            <span class="ltabs-tab-selected"></span>
                                            <span class="ltabs-tab-arrow">▼</span>
                                            <div class="item-sub-cat">
                                                <ul class="ltabs-tabs cf">
                                                    <li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".items-category-1"> <span class="ltabs-tab-label">Best Seller</span> </li>
                                                    <li class="ltabs-tab " data-category-id="9" data-active-content=".items-category-9"> <span class="ltabs-tab-label">New Arrivals</span> </li>
                                                    <li class="ltabs-tab " data-category-id="10" data-active-content=".items-category-10"> <span class="ltabs-tab-label">Most Rating</span> </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Tabs-->

                                    </div>
                                    <div class="wap-listing-tabs products-list grid">
                                        <div class="ltabs-items-container ">
                                            <!--Begin Items-->
                                            <div class="ltabs-items ltabs-items-selected items-category-1" data-total="16">
                                                <div class="ltabs-items-inner ltabs-slider">
                                                    <div class="ltabs-item">
                                                        <div class="item-inner product-layout transition product-grid">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="image product-image-container ">
                                                                        <a class="lt-image" data-product="114" href="#" target="_self" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
                                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/1-270x270.jpg" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label"><span class="label-product label-sale">Sale</span></div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4><a href="product.html" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus" target="_self"> Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus</a></h4>
                                                                        <div class="total-price clearfix">
                                                                            <div class="price price-left"><span class="price-new">$98.00</span><span class="price-old">$122.00</span></div>
                                                                            <div class="price-sale price-right"><span class="discount 123">-20%<strong>OFF</strong></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" data-product="114" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
                                                                                <i class="fa fa-heart"></i>
                                                                            </button>
                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
                                                                                <i class="fa fa-exchange"></i>
                                                                            </button>
                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                                <span class="hidden">Add to cart</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ltabs-item">
                                                        <div class="item-inner product-layout transition product-grid">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="image product-image-container ">
                                                                        <a class="lt-image" data-product="114" href="#" target="_self" title="Compact (External Battery Power Bank) with Premium">
                                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/12-270x270.jpg" alt="Compact (External Battery Power Bank) with Premium">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4><a href="product.html" title="Compact (External Battery Power Bank) with Premium" target="_self">Compact (External Battery Power Bank) with Premium</a></h4>
                                                                        <div class="total-price clearfix">
                                                                            <div class="price price-left"><span class="price-new">$122.00</span><span class="price-old"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" data-product="114" href="#" target="_self" title="Compact (External Battery Power Bank) with Premium"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
                                                                                <i class="fa fa-heart"></i>
                                                                            </button>
                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
                                                                                <i class="fa fa-exchange"></i>
                                                                            </button>
                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                                <span class="hidden">Add to cart</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ltabs-item">
                                                        <div class="item-inner product-layout transition product-grid">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="image product-image-container ">
                                                                        <a class="lt-image" data-product="114" href="#" target="_self" title="Compact Portable Charger (External Battery)">
                                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/13-270x270.jpg" alt="Compact Portable Charger (External Battery)">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4><a href="product.html" title="Compact Portable Charger (External Battery)" target="_self">Compact Portable Charger (External Battery)</a></h4>
                                                                        <div class="total-price clearfix">
                                                                            <div class="price price-left"><span class="price-new">$98.00</span><span class="price-old"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" data-product="114" href="#" target="_self" title="Compact Portable Charger (External Battery)"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
                                                                                <i class="fa fa-heart"></i>
                                                                            </button>
                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
                                                                                <i class="fa fa-exchange"></i>
                                                                            </button>
                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                                <span class="hidden">Add to cart</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ltabs-item">
                                                        <div class="item-inner product-layout transition product-grid">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="image product-image-container ">
                                                                        <a class="lt-image" data-product="114" href="#" target="_self" title="Compact Portable Charger (External Battery) T22">
                                                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/21-270x270.jpg" alt="Compact Portable Charger (External Battery) T22">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label"><span class="label-product label-sale">Sale</span></div>
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <h4><a href="product.html" title="Compact Portable Charger (External Battery) T22" target="_self">Compact Portable Charger (External Battery) T22</a></h4>
                                                                        <div class="total-price clearfix">
                                                                            <div class="price price-left"><span class="price-new">$98.00</span><span class="price-old">$122.00</span></div>
                                                                            <div class="price-sale price-right"><span class="discount 123">-20%<strong>OFF</strong></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <div class="button-inner so-quickview">
                                                                            <a class="lt-image hidden" data-product="114" href="#" target="_self" title="Compact Portable Charger (External Battery) T22"></a>
                                                                            <a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
                                                                                <i class="fa fa-search"></i>
                                                                            </a>
                                                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
                                                                                <i class="fa fa-heart"></i>
                                                                            </button>
                                                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
                                                                                <i class="fa fa-exchange"></i>
                                                                            </button>
                                                                            <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
                                                                                <span class="hidden">Add to cart</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="ltabs-items items-category-9 grid" data-total="16">
                                                <div class="ltabs-loading"></div>
                                            </div>
                                            <div class="ltabs-items  items-category-10 grid" data-total="16">
                                                <div class="ltabs-loading"></div>
                                            </div>
                                            <div class="row clearfix banner-tab">
                                                <div class="col-lg-6 col-md-6 col-sm-6 banners">
                                                    <div>
                                                        <a href="#"><img src="{{asset('public/frontend/')}}/image/catalog/demo/banners/home1/bn-5.jpg" alt="Image Client"></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 banners">
                                                    <div>
                                                        <a href="#"><img src="{{asset('public/frontend/')}}/image/catalog/demo/banners/home1/bn-6.jpg" alt="Image Client"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Extra-->
    <div class="container page-builder-ltr">
        <div class="row row-style row_a6">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col_siw1  block block_9">
                <div class="moduletable module so-extraslider-ltr home1-extra clearfix">
                    <div class="head-title font-ct">
                        <h2 class="modtitle">Sport &amp; Entertaiment</h2>
                    </div>
                    <div class="modcontent">
                        <div id="so_extra_slider_sport" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
                            <div class="extraslider-inner owl2-carousel owl2-theme owl2-loaded extra-animate">
                                <div class="category-slider-inner products-list yt-content-slider-2" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                    <div class="item products-list grid">
                                        <div class="item-wrap product-layout style1 ">
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Men Collection Outfit Grid, Outfit and  Colored Sport ">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/sport/9-120x120.jpg" alt="Men Collection Outfit Grid, Outfit and  Colored Sport ">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">Sale</span>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Men Collection Outfit Grid, Outfit and  Colored Sport ">
                                                                Men Collection Outfit Grid, Outfit and Colored Sport
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $74.20
                                                                    </span>
                                                                    <span class="price-old">$122.00</span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                    <span class="discount">-40%
                                                                        <strong>OFF</strong>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Xumstick teachings  uttempor the actual of the great">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/sport/6-120x120.jpg" alt="Xumstick teachings  uttempor the actual of the great">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Xumstick teachings  uttempor the actual of the great">
                                                                Xumstick teachings uttempor the actual of...
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $98.00
                                                                    </span>
                                                                    <span class="price-old">$122.00</span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                    <span class="discount">-20%
                                                                        <strong>OFF</strong>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Amy Byer Big Girls' Colorblock  Trapeze Dress orilamra">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/sport/1-120x120.jpg" alt="Amy Byer Big Girls' Colorblock  Trapeze Dress orilamra">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Amy Byer Big Girls' Colorblock  Trapeze Dress orilamra">
                                                                Amy Byer Big Girls' Colorblock Trapeze Dre...
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $122.00
                                                                    </span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                    </div>
                                    <div class="item products-list grid">
                                        <div class="item-wrap product-layout style1 ">
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Drumstick uttempor the actual teachings of the great">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/spa/12-120x120.jpg" alt="Drumstick uttempor the actual teachings of the great">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Drumstick uttempor the actual teachings of the great">
                                                                Drumstick uttempor the actual teachings of the great
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $123.20
                                                                    </span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Drumstick uttempor the actual teachings of the great">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/sport/1-120x120.jpg" alt="Drumstick uttempor the actual teachings of the great">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Drumstick uttempor the actual teachings of the great">
                                                                Drumstick uttempor the actual teachings of the great
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $122.00
                                                                    </span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Amy Byer Big Girls' Colorblock  Trapeze orilamra ">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/sport/4-120x120.jpg" alt="Amy Byer Big Girls' Colorblock  Trapeze orilamra ">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">Sale</span>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Amy Byer Big Girls' Colorblock  Trapeze orilamra">
                                                                Vitaeelit pilama loves or pursues or desires to pain
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $1,990.00
                                                                    </span>
                                                                    <span class="price-old">$2,000.00</span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                    <span class="discount">-1%
                                                                        <strong>OFF</strong>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col_lhsd  block block_9">
                <div class="moduletable module so-extraslider-ltr home1-extra clearfix home1-extra-style2">
                    <div class="head-title font-ct">
                        <h2 class="modtitle">Food & Restaurant</h2>
                    </div>
                    <div class="modcontent">
                        <div id="so_extra_slider_food" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
                            <div class="extraslider-inner owl2-carousel owl2-theme owl2-loaded extra-animate">
                                <div class="category-slider-inner products-list yt-content-slider-2" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                    <div class="item products-list grid">
                                        <div class="item-wrap product-layout style1 ">
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/food/2-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">Sale</span>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
                                                                Vitaeelit pilama loves or pursues or desires to pain
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $123.20
                                                                    </span>
                                                                    <span class="price-old">$98.00</span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                    <span class="discount">-13%
                                                                        <strong>OFF</strong>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/food/8-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
                                                                Vitaeelit pilama loves or pursues or desires to pain
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $123.20
                                                                    </span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/food/1-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
                                                                Vitaeelit pilama loves or pursues or desires to pain
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $123.20
                                                                    </span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                    </div>
                                    <div class="item products-list grid">
                                        <div class="item-wrap product-layout style1 ">
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/food/9-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
                                                                Vitaeelit pilama loves or pursues or desires to pain
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $123.20
                                                                    </span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/food/7-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
                                                                Vitaeelit pilama loves or pursues or desires to pain
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $182.00
                                                                    </span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/food/4-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
                                                                Vitaeelit pilama loves or pursues or desires to pain
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $182.00
                                                                    </span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col_dkfx  block block_9">
                <div class="moduletable module so-extraslider-ltr home1-extra clearfix home1-extra-style3">
                    <div class="head-title font-ct">
                        <h2 class="modtitle">Book Stationery</h2>
                    </div>
                    <div class="modcontent">
                        <div id="so_extra_slider_book" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
                            <div class="extraslider-inner owl2-carousel owl2-theme owl2-loaded extra-animate">
                                <div class="category-slider-inner products-list yt-content-slider-2" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                    <div class="item products-list grid">
                                        <div class="item-wrap product-layout style1 ">
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/book/3-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">Sale</span>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos">
                                                                Bazem Carlo again is there anyone who loves oreos
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $98.00
                                                                    </span>
                                                                    <span class="price-old">$122.00</span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                    <span class="discount">-20%
                                                                        <strong>OFF</strong>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/book/5-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos ">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">Sale</span>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos">
                                                                Bazem Carlo again is there anyone who loves oreos
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $108.80
                                                                    </span>
                                                                    <span class="price-old">$122.00</span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                    <span class="discount">-20%
                                                                        <strong>OFF</strong>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/book/8-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos ">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">Sale</span>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
                                                                Bazem Carlo again is there anyone who loves oreos
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $122.00
                                                                    </span>
                                                                    <span class="price-old">$146.00</span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                    <span class="discount">-17%
                                                                        <strong>OFF</strong>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                    </div>
                                    <div class="item products-list grid">
                                        <div class="item-wrap product-layout style1 ">
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/book/9-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos ">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">Sale</span>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
                                                                Bazem Carlo again is there anyone who loves oreos
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $42.80
                                                                    </span>
                                                                    <span class="price-old">$1,202.00</span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                    <span class="discount">-97%
                                                                        <strong>OFF</strong>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/book/1-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos ">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">Sale</span>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
                                                                Bazem Carlo again is there anyone who loves oreos
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $50.00
                                                                    </span>
                                                                    <span class="price-old">$122.00</span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                    <span class="discount">-60%
                                                                        <strong>OFF</strong>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <div class="item-wrap-inner product-item-container">
                                                <div class="left-block">
                                                    <div class="item-image">
                                                        <div class="item-img-info product-image-container ">
                                                            <a class="lt-image" data-product="55" href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
                                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/book/2-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos ">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">Sale</span>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4 class="item-title">
                                                            <a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
                                                                Bazem Carlo again is there anyone who loves oreos
                                                            </a>
                                                        </h4>
                                                        <!-- Begin item-content -->
                                                        <div class="item-content">
                                                            <div class="total-price">
                                                                <div class="price price-left">
                                                                    <span class="price product-price">
                                                                        $56.00
                                                                    </span>
                                                                    <span class="price-old">$62.00</span>
                                                                </div>
                                                                <div class="price-sale price-right">
                                                                    <span class="discount">-10%
                                                                        <strong>OFF</strong>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End item-content -->
                                                    </div>
                                                    <!-- End item-info -->
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_5dfs  block block_10">
                <div class="clearfix home1-sevices">
                    <ul class="category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="4" data-items_column0="4" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                        <li class="item payment col-md-3">
                            <div class="icon">
                            </div>
                            <div class="text">
                                <h5><a href="#">Payment on Delivery</a></h5>
                                <p>Cash on delivery option</p>
                            </div>
                        </li>
                        <li class="item free col-md-3">
                            <div class="icon">
                            </div>
                            <div class="text">
                                <h5><a href="#">Free shipping</a></h5>
                                <p>Free shipping on oder over $100</p>
                            </div>
                        </li>
                        <li class="item secure col-md-3">
                            <div class="icon">
                            </div>
                            <div class="text">
                                <h5><a href="#">Secure Payment</a></h5>
                                <p>We value your security</p>
                            </div>
                        </li>
                        <li class="item support col-md-3">
                            <div class="icon">
                            </div>
                            <div class="text">
                                <h5><a href="#">Online support</a></h5>
                                <p>We have support 24/7</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_cfay  block block_11">
                <div class="module so-latest-blog custom-ourblog clearfix default-nav preset01-2 preset02-2 preset03-2 preset04-2 preset05-1">
                    <h2 class="modtitle"><span>Latest Blog</span></h2>
                    <div class="modcontent">
                        <div id="so_latest_blog_1" class="so-blog-external button-type2 button-type2">
                            <div class="category-slider-inner products-list yt-content-slider blog-external clearfix " data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="2" data-items_column0="2" data-items_column1="2" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                <div class="media">
                                    <div class="item head-button">
                                        <div class="content-img col-sm-6 col-xs-12">
                                            <a href="product.html" target="_self">
                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/blog/8-260x190.jpg" alt="Aestibulum ipsum a ornare car">
                                            </a>
                                        </div>
                                        <div class="content-detail col-sm-6 col-xs-12">
                                            <div class="media-content so-block">
                                                <div class="entry-date font-ct date-bottom">
                                                    <span class="media-date-added"><i class="fa fa-clock-o"></i> 17 Oct 2017</span>
                                                </div>
                                                <h4 class="media-heading head-item">
                                                    <a href="product.html" title="Aestibulum ipsum a ornare car" target="_self">Aestibulum ipsum a ornare car</a>
                                                </h4>
                                                <div class="description">
                                                    Morbi tempus, non ullamcorper euismod, erat odio suscipit purus, nec ornare lacus turpis ac purus. Mauris cursus in mi v..
                                                </div>
                                                <div class="readmore">
                                                    <a href="product.html" target="_self">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item head-button">
                                        <div class="content-img col-sm-6 col-xs-12">
                                            <a href="product.html" target="_self">
                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/blog/9-260x190.jpg" alt="Aestibulum ipsum a ornare lectus">
                                            </a>
                                        </div>
                                        <div class="content-detail col-sm-6 col-xs-12">
                                            <div class="media-content so-block">
                                                <div class="entry-date font-ct date-bottom">
                                                    <span class="media-date-added"><i class="fa fa-clock-o"></i> 17 Oct 2017</span>
                                                </div>
                                                <h4 class="media-heading head-item">
                                                    <a href="product.html" title="Aestibulum ipsum a ornare lectus" target="_self">Aestibulum ipsum a ornare lectus</a>
                                                </h4>
                                                <div class="description">
                                                    Morbi tempus, non ullamcorper euismod, erat odio suscipit purus, nec ornare lacus turpis ac purus. Mauris cursus in mi v..
                                                </div>
                                                <div class="readmore">
                                                    <a href="product.html" target="_self">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item head-button">
                                        <div class="content-img col-sm-6 col-xs-12">
                                            <a href="product.html" target="_self">
                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/blog/5-260x190.jpg" alt="Baby Came Back! Missed Out? Grab Your">
                                            </a>
                                        </div>
                                        <div class="content-detail col-sm-6 col-xs-12">
                                            <div class="media-content so-block">
                                                <div class="entry-date font-ct date-bottom">
                                                    <span class="media-date-added"><i class="fa fa-clock-o"></i> 17 Oct 2017</span>
                                                </div>
                                                <h4 class="media-heading head-item">
                                                    <a href="product.html" title="Baby Came Back! Missed Out? Grab Your" target="_self">Baby Came Back! Missed Out? Grab Your</a>
                                                </h4>
                                                <div class="description">
                                                    Morbi tempus, non ullamcorper euismod, erat odio suscipit purus, nec ornare lacus turpis ac purus. Mauris cursus in mi v..
                                                </div>
                                                <div class="readmore">
                                                    <a href="product.html" target="_self">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item head-button">
                                        <div class="content-img col-sm-6 col-xs-12">
                                            <a href="product.html" target="_self">
                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/blog/2-260x190.jpg" alt="Biten demonstraverunt lector ">
                                            </a>
                                        </div>
                                        <div class="content-detail col-sm-6 col-xs-12">
                                            <div class="media-content so-block">
                                                <div class="entry-date font-ct date-bottom">
                                                    <span class="media-date-added"><i class="fa fa-clock-o"></i> 17 Oct 2017</span>
                                                </div>
                                                <h4 class="media-heading head-item">
                                                    <a href="product.html" title="Biten demonstraverunt lector " target="_self">Biten demonstraverunt lector </a>
                                                </h4>
                                                <div class="description">
                                                    Morbi tempus, non ullamcorper euismod, erat odio suscipit purus, nec ornare lacus turpis ac purus. Mauris cursus in mi v..
                                                </div>
                                                <div class="readmore">
                                                    <a href="product.html" target="_self">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item head-button">
                                        <div class="content-img col-sm-6 col-xs-12">
                                            <a href="product.html" target="_self">
                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/blog/7-260x190.jpg" alt="Commodo laoreet semper">
                                            </a>
                                        </div>
                                        <div class="content-detail col-sm-6 col-xs-12">
                                            <div class="media-content so-block">
                                                <div class="entry-date font-ct date-bottom">
                                                    <span class="media-date-added"><i class="fa fa-clock-o"></i> 17 Oct 2017</span>
                                                </div>
                                                <h4 class="media-heading head-item">
                                                    <a href="product.html" title="Commodo laoreet semper" target="_self">Commodo laoreet semper</a>
                                                </h4>
                                                <div class="description">
                                                    Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante ad..
                                                </div>
                                                <div class="readmore">
                                                    <a href="product.html" target="_self">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item head-button">
                                        <div class="content-img col-sm-6 col-xs-12">
                                            <a href="product.html" target="_self">
                                                <img src="{{asset('public/frontend/')}}/image/catalog/demo/blog/3-260x190.jpg" alt="Neque porro quisquam est">
                                            </a>
                                        </div>
                                        <div class="content-detail col-sm-6 col-xs-12">
                                            <div class="media-content so-block">
                                                <div class="entry-date font-ct date-bottom">
                                                    <span class="media-date-added"><i class="fa fa-clock-o"></i> 17 Oct 2017</span>
                                                </div>
                                                <h4 class="media-heading head-item">
                                                    <a href="product.html" title="Neque porro quisquam est" target="_self">Neque porro quisquam est</a>
                                                </h4>
                                                <div class="description">
                                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius ..
                                                </div>
                                                <div class="readmore">
                                                    <a href="product.html" target="_self">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_swee  block block_12">
                <div id="content_slider_mfn4" class="yt-content-slider owl2-theme yt-content-slider-style-default arrow-default top-brand owl2-carousel owl2-responsive-1200 owl2-loaded yt-testimonials-slider" data-transitionin="fadeIn" data-transitionout="fadeOut" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="6" data-items_column0="6" data-items_column1="5" data-items_column2="4" data-items_column3="3" data-items_column4="2" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
                    <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="{{asset('public/frontend/')}}/image/catalog/demo/brand/brand-1.jpg" alt="title_dsdfg">
                    </div>
                    <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="{{asset('public/frontend/')}}/image/catalog/demo/brand/brand-2.jpg" alt="title_dsdfg">
                    </div>
                    <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="{{asset('public/frontend/')}}/image/catalog/demo/brand/brand-3.jpg" alt="title_dsdfg">
                    </div>
                    <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="{{asset('public/frontend/')}}/image/catalog/demo/brand/brand-4.jpg" alt="title_dsdfg">
                    </div>
                    <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="{{asset('public/frontend/')}}/image/catalog/demo/brand/brand-5.jpg" alt="title_dsdfg">
                    </div>
                    <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="{{asset('public/frontend/')}}/image/catalog/demo/brand/brand-6.jpg" alt="title_dsdfg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection