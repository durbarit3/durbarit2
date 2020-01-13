@extends('layouts.websiteapp')
@section('main_content')

<!-- Main Container  -->
<div class="breadcrumbs">
    <div class="container">
        <div class="title-breadcrumb">
            Bluetooth Speakers
        </div>
        <ul class="breadcrumb-cate">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Bluetooth Speakers</a></li>
        </ul>
    </div>
</div>

<div class="container product-detail">
    <div class="row">
        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column sidebar-offcanvas">
            <span id="close-sidebar" class="fa fa-times"></span>
            <div class="module so_filter_wrap filter-horizontal">
                <h3 class="modtitle"><span>SHOP BY</span></h3>
                <div class="modcontent">
                    <ul>
                        <li class="so-filter-options" data-option="search">
                            <div class="so-filter-heading">
                                <div class="so-filter-heading-text">
                                    <span>Search</span>
                                </div>
                                <i class="fa fa-chevron-down"></i>
                            </div>

                            <div class="so-filter-content-opts">
                                <div class="so-filter-content-opts-container">
                                    <div class="so-filter-option" data-type="search">
                                        <div class="so-option-container">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="text_search" id="text_search" value="">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-default" type="button" id="submit_text_search"><i class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="so-filter-options" data-option="Size">
                            <div class="so-filter-heading">
                                <div class="so-filter-heading-text">
                                    <span>Size</span>
                                </div>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="so-filter-content-opts" style="display: block;">
                                <div class="so-filter-content-opts-container">
                                    <div class="so-filter-option opt-select  opt_enable" data-type="option" data-option_value="46" data-count_product="1" data-list_product="111">
                                        <div class="so-option-container">
                                            <div class="option-input">
                                                <span class="fa fa-square-o">
                                                </span>
                                            </div>
                                            <label>S</label>
                                            <div class="option-count ">
                                                <span>1</span>
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="so-filter-option opt-select  opt_enable" data-type="option" data-option_value="47" data-count_product="1" data-list_product="111">
                                        <div class="so-option-container">
                                            <div class="option-input">
                                                <span class="fa fa-square-o">
                                                </span>
                                            </div>
                                            <label>M</label>
                                            <div class="option-count ">
                                                <span>1</span>
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="so-filter-option opt-select  opt_enable" data-type="option" data-option_value="48" data-count_product="1" data-list_product="111">
                                        <div class="so-option-container">
                                            <div class="option-input">
                                                <span class="fa fa-square-o">
                                                </span>
                                            </div>
                                            <label>L</label>
                                            <div class="option-count ">
                                                <span>1</span>
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="so-filter-options" data-option="Manufacturer">
                            <div class="so-filter-heading">
                                <div class="so-filter-heading-text">
                                    <span>Manufacturer</span>
                                </div>
                                <i class="fa fa-chevron-down"></i>
                            </div>

                            <div class="so-filter-content-opts">
                                <div class="so-filter-content-opts-container">
                                    <div class="so-filter-option opt-select  opt_enable" data-type="manufacturer" data-manufacturer_value="8" data-count_product="4" data-list_product="30,58,61,105">
                                        <div class="so-option-container">
                                            <div class="option-input">
                                                <span class="fa fa-square-o">
                                                </span>
                                            </div>
                                            <label><img src="{{asset('public/frontend/')}}/image/placeholder.png" style="width: 20px; height: 20px;"> Apple</label>
                                            <div class="option-count ">
                                                <span>4</span>
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="so-filter-option opt-select  opt_enable" data-type="manufacturer" data-manufacturer_value="10" data-count_product="1" data-list_product="68">
                                        <div class="so-option-container">
                                            <div class="option-input">
                                                <span class="fa fa-square-o">
                                                </span>
                                            </div>
                                            <label><img src="{{asset('public/frontend/')}}/image/placeholder.png" style="width: 20px; height: 20px;"> Sony</label>
                                            <div class="option-count ">
                                                <span>1</span>
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="so-filter-options" data-option="Price">
                            <div class="so-filter-heading">
                                <div class="so-filter-heading-text">
                                    <span>Price</span>
                                </div>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="so-filter-content-opts">
                                <div class="so-filter-content-opts-container">
                                    <div class="so-filter-content-wrapper so-filter-iscroll">
                                        <div class="so-filter-options">
                                            <div class="so-filter-option so-filter-price">
                                                <div class="content_min_max">
                                                    <div class="put-min put-min_max">
                                                        $ <input type="number" class="input_min form-control" value="74" min="74" max="1202">
                                                    </div>
                                                    <div class="put-max put-min_max">
                                                        $ <input type="number" class="input_max form-control" value="1202" min="74" max="1202">
                                                    </div>
                                                </div>
                                                <div class="content_scroll">
                                                    <div id="slider-range" </div> </div> </div> </div> </div> </div> </div> </li> </ul> <div class="clear_filter">
                                                        <a href="javascript:;" class="btn btn-default inverse" id="btn_resetAll">
                                                            <span class="hidden fa fa-times" aria-hidden="true"></span> Reset All
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="moduletable module so-extraslider-ltr best-seller best-seller-custom">
                                                <h3 class="modtitle"><span>Best Sellers</span></h3>
                                                <div class="modcontent">
                                                    <div id="so_extra_slider" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
                                                        <div class="extraslider-inner owl2-carousel owl2-theme owl2-loaded extra-animate" data-effect="none">
                                                            <div class="item ">
                                                                <div class="item-wrap style1 ">
                                                                    <div class="item-wrap-inner">
                                                                        <div class="media-left">
                                                                            <div class="item-image">
                                                                                <div class="item-img-info product-image-container ">
                                                                                    <div class="box-label">
                                                                                    </div>
                                                                                    <a class="lt-image" data-product="104" href="#" target="_self" title="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2)">
                                                                                        <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/25.jpg" alt="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2)">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div class="item-info">
                                                                                <!-- Begin title -->
                                                                                <div class="item-title">
                                                                                    <a href="product.html" target="_self" title="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2) ">
                                                                                        Toshiba Pro 21"(21:9) FHD IPS LED 1920X1080 HDMI(2)
                                                                                    </a>
                                                                                </div>
                                                                                <!-- Begin ratting -->
                                                                                <div class="rating">
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                </div>
                                                                                <!-- Begin item-content -->
                                                                                <div class="price">
                                                                                    <span class="old-price product-price">$62.00</span>
                                                                                    <span class="price-old">$337.99</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End item-info -->
                                                                    </div>
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                                <!-- End item-wrap -->
                                                                <div class="item-wrap style1 ">
                                                                    <div class="item-wrap-inner">
                                                                        <div class="media-left">
                                                                            <div class="item-image">
                                                                                <div class="item-img-info product-image-container ">
                                                                                    <div class="box-label">
                                                                                    </div>
                                                                                    <a class="lt-image" data-product="66" href="#" target="_self" title="Compact Portable Charger (Power Bank) with Premium">
                                                                                        <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/19.jpg" alt="Compact Portable Charger (Power Bank) with Premium">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div class="item-info">
                                                                                <!-- Begin title -->
                                                                                <div class="item-title">
                                                                                    <a href="product.html" target="_self" title="Compact Portable Charger (Power Bank) with Premium ">
                                                                                        Compact Portable Charger (Power Bank) with Premium
                                                                                    </a>
                                                                                </div>
                                                                                <!-- Begin ratting -->
                                                                                <div class="rating">
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                </div>
                                                                                <!-- Begin item-content -->
                                                                                <div class="price">
                                                                                    <span class="old-price product-price">$74.00</span>
                                                                                    <span class="price-old">$241.99</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End item-info -->
                                                                    </div>
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                                <!-- End item-wrap -->
                                                                <div class="item-wrap style1 ">
                                                                    <div class="item-wrap-inner">
                                                                        <div class="media-left">
                                                                            <div class="item-image">
                                                                                <div class="item-img-info product-image-container ">
                                                                                    <div class="box-label">
                                                                                    </div>
                                                                                    <a class="lt-image" data-product="50" href="#" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan ">
                                                                                        <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/travel/8.jpg" alt="Philipin Tour Group Manila/ Pattaya / Mactan ">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div class="item-info">
                                                                                <!-- Begin title -->
                                                                                <div class="item-title">
                                                                                    <a href="product.html" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan  ">
                                                                                        Philipin Tour Group Manila/ Pattaya / Mactan
                                                                                    </a>
                                                                                </div>
                                                                                <!-- Begin ratting -->
                                                                                <div class="rating">
                                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                </div>
                                                                                <!-- Begin item-content -->
                                                                                <div class="price">
                                                                                    <span class="old-price product-price">$74.00</span>
                                                                                    <span class="price-old">$122.00</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End item-info -->
                                                                    </div>
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                                <!-- End item-wrap -->
                                                                <div class="item-wrap style1 ">
                                                                    <div class="item-wrap-inner">
                                                                        <div class="media-left">
                                                                            <div class="item-image">
                                                                                <div class="item-img-info product-image-container ">
                                                                                    <div class="box-label">
                                                                                    </div>
                                                                                    <a class="lt-image" data-product="78" href="#" target="_self" title="Portable  Compact Charger (External Battery) t45">
                                                                                        <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/4.jpg" alt="Portable  Compact Charger (External Battery) t45">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div class="item-info">
                                                                                <!-- Begin title -->
                                                                                <div class="item-title">
                                                                                    <a href="product.html" target="_self" title="Portable  Compact Charger (External Battery) t45 ">
                                                                                        Portable Compact Charger (External Battery) t45
                                                                                    </a>
                                                                                </div>
                                                                                <!-- Begin ratting -->
                                                                                <div class="rating">
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                </div>
                                                                                <!-- Begin item-content -->
                                                                                <div class="price">
                                                                                    <span class="old-price product-price">$74.00</span>
                                                                                    <span class="price-old">$122.00</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End item-info -->
                                                                    </div>
                                                                    <!-- End item-wrap-inner -->
                                                                </div>
                                                                <!-- End item-wrap -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="module banner-left hidden-xs ">
                                                <div class="static-image-home-left banners">
                                                    <div><a title="Static Image" href="#"><img src="{{asset('public/frontend/')}}/image/catalog/demo/banners/image-left.jpg" alt="Static Image"></a></div>
                                                </div>
                                            </div>
        </aside>
        <div id="content" class="col-md-9 col-sm-12 col-xs-12">
            <div class="module banners-effect-9 form-group">
                <div class="banners">
                    <div>
                        <a href="#"><img src="{{asset('public/frontend/')}}/image/catalog/demo/category/men-cat.jpg"></a>
                    </div>
                </div>
            </div>
            <a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i>Sidebar</a>

            <div class="products-category">
                <div class="form-group clearfix">
                    <h3 class="title-category ">Bluetooth Speakers</h3>
                </div>
                <div class="products-category">
                    <div class="product-filter filters-panel">
                        <div class="row">
                            <div class="col-sm-2 view-mode hidden-sm hidden-xs">
                                <div class="list-view">
                                    <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th"></i></button>
                                    <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                </div>
                            </div>

                            <div class="short-by-show form-inline text-right col-md-10 col-sm-12">
                                <div class="form-group short-by">
                                    <label class="control-label" for="input-sort">Sort By:</label>
                                    <select id="input-sort" class="form-control" onchange="location = this.value;">
                                        <option value="" selected="selected">Default</option>
                                        <option value="">Name (A - Z)</option>
                                        <option value="">Name (Z - A)</option>
                                        <option value="">Price (Low &gt; High)</option>
                                        <option value="">Price (High &gt; Low)</option>
                                        <option value="">Rating (Highest)</option>
                                        <option value="">Rating (Lowest)</option>
                                        <option value="">Model (A - Z)</option>
                                        <option value="">Model (Z - A)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-limit">Show:</label>
                                    <select id="input-limit" class="form-control" onchange="location = this.value;">
                                        <option value="" selected="selected">12</option>
                                        <option value="">25</option>
                                        <option value="">50</option>
                                        <option value="">75</option>
                                        <option value="">100</option>
                                    </select>
                                </div>
                                <div class="form-group product-compare"><a id="compare-total" class="btn btn-default">Product Compare (0)</a></div>
                            </div>

                        </div>
                    </div>
                    <div class="products-list grid row number-col-3 so-filter-gird">
                        <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img  ">
                                        <a href="product.html" title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium ">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/26.jpg " alt="Lorem Ipsum dolor at vero eos et iusto odi  with Premium " title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium " class="img-1 img-responsive">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/30.jpg" alt="Lorem Ipsum dolor at vero eos et iusto odi  with Premium " title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium " class="img-2 img-responsive">
                                        </a>
                                    </div>
                                    <div class="countdown_box">
                                        <div class="countdown_inner">
                                        </div>
                                    </div>
                                    <div class="box-label">
                                        <span class="label-product label-sale">
                                            Sale
                                        </span>
                                    </div>
                                </div>

                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Lorem Ipsum dolor at vero eos et iusto odi with Premium </a></h4>
                                        <div class="total-price">
                                            <div class="price price-left">
                                                <span class="price-new">$98.00 </span> <span class="price-old">$122.00 </span>
                                            </div>
                                            <div class="price-sale price-right">
                                                <span class="discount">-20%
                                                    <strong>OFF</strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the.. </p>
                                        </div>
                                        <div class="list-block hidden">
                                            <button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe" href="quickview.html"> <i class="fa fa-search"></i> </a>
                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('105');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('105');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('105', '2');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img  ">
                                        <a href="product.html" title="Computer Science saepe eveniet ut et volu redae ">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/23.jpg " alt="Computer Science saepe eveniet ut et volu redae " title="Computer Science saepe eveniet ut et volu redae " class="img-1 img-responsive">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/15.jpg" alt="Computer Science saepe eveniet ut et volu redae " title="Computer Science saepe eveniet ut et volu redae " class="img-2 img-responsive">
                                        </a>
                                        <div class="box-label">
                                            <span class="label-product label-sale">
                                                Sale
                                            </span>
                                        </div>
                                    </div>
                                    <div class="countdown_box">
                                        <div class="countdown_inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Computer Science saepe eveniet ut et volu redae </a></h4>
                                        <div class="total-price">
                                            <div class="price price-left">
                                                <span class="price-new">$119.60 </span> <span class="price-old">$122.00 </span>
                                            </div>
                                            <div class="price-sale price-right">
                                                <span class="discount">-2%
                                                    <strong>OFF</strong>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="description item-desc hidden">
                                            <p>Born to be worn.

                                                Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion statement... </p>
                                        </div>
                                        <div class="list-block hidden">
                                            <button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe"> <i class="fa fa-search"></i> </a>
                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('58');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('58');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('58', '1');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="product-layout  col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img  ">
                                        <a title="Compact Portable Charger External ">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/22.jpg " alt="Compact Portable Charger External " title="Compact Portable Charger External " class="img-1 img-responsive">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/23.jpg" alt="Compact Portable Charger External " title="Compact Portable Charger External " class="img-2 img-responsive">
                                        </a>
                                        <div class="box-label">
                                            <span class="label-product label-sale">
                                                Sale
                                            </span>
                                        </div>
                                    </div>
                                    <div class="countdown_box">
                                        <div class="countdown_inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Compact Portable Charger External </a></h4>
                                        <div class="total-price">
                                            <div class="price price-left">
                                                <span class="price-new">$962.00 </span> <span class="price-old">$1,202.00 </span>
                                            </div>
                                            <div class="price-sale price-right">
                                                <span class="discount">-20%
                                                    <strong>OFF</strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Born to be worn.

                                                Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion statement... </p>
                                        </div>
                                        <div class="list-block hidden">
                                            <button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe" href="quickview.html"> <i class="fa fa-search"></i> </a>
                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('61');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('61');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('61', '1');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-lg-block"></div>
                        <div class="product-layout  col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img  ">
                                        <a href="product.html" title="Compact Portable Charger (Power Bank) with Premium ">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/19.jpg " alt="Compact Portable Charger (Power Bank) with Premium " title="Compact Portable Charger (Power Bank) with Premium " class="img-1 img-responsive">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/2.jpg" alt="Compact Portable Charger (Power Bank) with Premium " title="Compact Portable Charger (Power Bank) with Premium " class="img-2 img-responsive">
                                        </a>
                                        <div class="box-label">
                                            <span class="label-product label-sale">
                                                Sale
                                            </span>
                                        </div>
                                    </div>
                                    <div class="countdown_box">
                                        <div class="countdown_inner">
                                        </div>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Compact Portable Charger (Power Bank) with Premium </a></h4>
                                        <div class="total-price">
                                            <div class="price price-left">
                                                <span class="price-new">$74.00 </span> <span class="price-old">$241.99 </span>
                                            </div>
                                            <div class="price-sale price-right">
                                                <span class="discount">-70%
                                                    <strong>OFF</strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Samsung Galaxy Tab 10.1, is the world’s thinnest tablet, measuring 8.6 mm thickness, running with Android 3.0 Honeycomb OS on a 1GHz dual-core Tegra 2 processor, similar to its younger brother S.. </p>
                                        </div>
                                        <div class="list-block hidden">
                                            <button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe" href="quickview.html"> <i class="fa fa-search"></i> </a>
                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('66');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('66');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('66', '1');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="product-layout  col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img  ">
                                        <a href="product.html" title="Compact Portable Charger (External Battery) T23 ">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/17.jpg " alt="Compact Portable Charger (External Battery) T23 " title="Compact Portable Charger (External Battery) T23 " class="img-1 img-responsive">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/15.jpg" alt="Compact Portable Charger (External Battery) T23 " title="Compact Portable Charger (External Battery) T23 " class="img-2 img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="box-label">
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Compact Portable Charger (External Battery) T23 </a></h4>
                                        <div class="total-price">
                                            <div class="price price-left">
                                                <span class="price-new">$1,202.00 </span>
                                            </div>
                                            <div class="price-sale price-right">
                                            </div>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Unprecedented power. The next generation of processing technology has arrived. Built into the newest VAIO notebooks lies Intel's latest, most powerful innovation yet: Intel® Centrino® 2 pr.. </p>
                                        </div>
                                        <div class="list-block hidden">
                                            <button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe" href="quickview.html"> <i class="fa fa-search"></i> </a>
                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('68');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('68');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('68', '1');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img  ">
                                        <a href="product.html" title="Compact Portable Charger (External Battery) ">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/13.jpg " alt="Compact Portable Charger (External Battery) " title="Compact Portable Charger (External Battery) " class="img-1 img-responsive">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/15.jpg" alt="Compact Portable Charger (External Battery) " title="Compact Portable Charger (External Battery) " class="img-2 img-responsive">
                                        </a>
                                        <div class="box-label">
                                        </div>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Compact Portable Charger (External Battery) </a></h4>
                                        <div class="total-price">
                                            <div class="price price-left">
                                                <span class="price-new">$98.00 </span>
                                            </div>
                                            <div class="price-sale price-right">
                                            </div>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Engineered with pro-level features and performance, the 12.3-effective-megapixel D300 combines brand new technologies with advanced features inherited from Nikon's newly announced D3 professional .. </p>
                                        </div>
                                        <div class="list-block hidden">
                                            <button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe" href="quickview.html"> <i class="fa fa-search"></i> </a>
                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('103');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('103');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('103', '1');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="clearfix visible-lg-block"></div>
                        <div class="product-layout  col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img  ">
                                        <a href="product.html" title="Compact (External Battery Power Bank) with Premium ">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/12.jpg " alt="Compact (External Battery Power Bank) with Premium " title="Compact (External Battery Power Bank) with Premium " class="img-1 img-responsive">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/2.jpg" alt="Compact (External Battery Power Bank) with Premium " title="Compact (External Battery Power Bank) with Premium " class="img-2 img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Compact (External Battery Power Bank) with Premium </a></h4>
                                        <div class="total-price">
                                            <div class="price price-left">
                                                <span class="price-new">$122.00 </span>
                                            </div>
                                            <div class="price-sale price-right">
                                            </div>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>【Neckband Designed】: Around-the-Neck Wearing Style With Body-contoured Fit. Made of ultra-light shape-memory alloy, great for easy carrying and all day comfort. Ensures a 100% comfortable fit especial.. </p>
                                        </div>
                                        <div class="list-block hidden">
                                            <button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe" href="#"> <i class="fa fa-search"></i> </a>
                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('111');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('111');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('111', '1');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img  ">
                                        <a href="product.html" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus ">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/1.jpg " alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus " title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus " class="img-1 img-responsive">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/10.jpg" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus " title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus " class="img-2 img-responsive">
                                        </a>
                                    </div>
                                    <div class="countdown_box">
                                        <div class="countdown_inner">
                                        </div>
                                    </div>
                                    <div class="box-label">
                                        <span class="label-product label-sale">
                                            Sale
                                        </span>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html"> Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus </a></h4>
                                        <div class="total-price">
                                            <div class="price price-left">
                                                <span class="price-new">$98.00 </span> <span class="price-old">$122.00 </span>
                                            </div>
                                            <div class="price-sale price-right">
                                                <span class="discount">-20%
                                                    <strong>OFF</strong>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>【Neckband Designed】: Around-the-Neck Wearing Style With Body-contoured Fit. Made of ultra-light shape-memory alloy, great for easy carrying and all day comfort. Ensures a 100% comfortable fit especial.. </p>
                                        </div>
                                        <div class="list-block hidden">
                                            <button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe" href="#"> <i class="fa fa-search"></i> </a>
                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('30', '1');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img  ">
                                        <a href="product.html" title="Portable  Compact Charger (External Battery) t45">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/4.jpg " alt=" Portable  Compact Charger (External Battery) t45" title="Portable  Compact Charger (External Battery) t45" class="img-1 img-responsive">
                                            <img src="{{asset('public/frontend/')}}/image/catalog/demo/product/electronic/6.jpg" alt="Portable  Compact Charger (External Battery) t45" title="Portable  Compact Charger (External Battery) t45" class="img-2 img-responsive">
                                        </a>
                                    </div>
                                    <div class="box-label">

                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Portable Compact Charger (External Battery) t45</a></h4>
                                        <div class="total-price">
                                            <div class="price price-left">
                                                <span class="price-new">$1299.00</span>
                                            </div>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>【Neckband Designed】: Around-the-Neck Wearing Style With Body-contoured Fit. Made of ultra-light shape-memory alloy, great for easy carrying and all day comfort. Ensures a 100% comfortable fit especial.. </p>
                                        </div>
                                        <div class="list-block hidden">
                                            <button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('30 ', '1 ');" data-original-title="Add to Cart "><span>Add to Cart </span></button>
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30 ');" data-original-title="Add to Wish List "><i class="fa fa-heart-o"></i></button>
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30 ');" data-original-title="Compare this Product "><i class="fa fa-retweet"></i></button>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a class="quickview iframe-link visible-lg btn-button" data-fancybox-type="iframe" href="#"> <i class="fa fa-search"></i> </a>
                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('30');" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                        <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('30');" data-original-title="Compare this Product"><i class="fa fa-retweet"></i></button>
                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('30', '1');" data-original-title="Add to Cart"><span class="hidden">Add to Cart </span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-filter product-filter-bottom filters-panel">
                        <div class="col-sm-6 text-left">
                            <ul class="pagination">
                                <li class="active"><span>1</span>
                                </li>
                                <li><a href="#">2</a>
                                </li>
                                <li><a href="#">&gt;</a>
                                </li>
                                <li><a href="#">&gt;|</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 text-right">Showing 1 to 9 of 9 (1 Pages)</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- //Main Container -->

@endsection 