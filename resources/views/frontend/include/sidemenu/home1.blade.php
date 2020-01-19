<!-- Menu left-->
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col_vnxd  menu-left">
	<div class="row row_f8gy  ">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_gafz col-style megamenu-style-dev megamenu-dev">
			<div class="responsive">
				<div class="so-vertical-menu no-gutter">
					<nav class="navbar-default">
						<div class=" container-megamenu  container   vertical  ">
							<div id="menuHeading">
								<div class="megamenuToogle-wrapper">
									<div class="megamenuToogle-pattern">
										<div class="container">
											<div><span></span><span></span><span></span></div>
											<span class="title-mega">
												All Categories
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="navbar-header">
								<span class="title-navbar hidden-lg hidden-md"> All Categories </span>
								<button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="vertical-wrapper">
								<span id="remove-verticalmenu" class="fa fa-times"></span>
								<div class="megamenu-pattern">
									<div class="container">
										<ul class="megamenu" data-transition="slide" data-animationtime="300">
											<li>
											<p class="close-menu"></p>
												<a class="clearfix">
													<span>
														<strong><img src="{{asset('public/frontend')}}/image/catalog/demo/menu/icon/icon-6.png" alt="">Hot Deals</strong>
													</span>
													
												</a>
											</li>
											@php
												$category=App\Category::where('is_deleted',0)->where('cate_status',1)->get();
											@endphp
										@foreach($category as $menu)
											<li class="item-vertical  vertical-style2 with-sub-menu hover">
												@php
													 $check=App\SubCategory::where('cate_id',$menu->id)->first();
												@endphp
												@if($check)
												<p class="close-menu"></p>
												<a class="clearfix">
													<span>
														<strong><img src="{{asset('public/uploads/category/'.$menu->cate_icon)}}" alt="">{{$menu->cate_name}}</strong>
													</span>
													<b class="fa fa-caret-right"></b>
												</a>
												<div class="sub-menu" data-subwidth="100">
													<div class="content">
														<div class="row">
															<div class="col-sm-12">
																<div class="html item-1">
																	<div class="row">
																		@php
																			$subcategory=App\SubCategory::where('cate_id',$menu->id)->where('is_deleted',0)->get();
																		@endphp
																		
																		<div class="col-md-7 col-sm-8">
																			@foreach($subcategory as $subcate)
																			<div class="item-3 col-md-6 cat-child icon-2 parent">
																			<a href="#" title="Sound">{{$subcate->subcate_name}}</a>
																				<ul>
																					@php
																						$resubcate=App\ReSubCategory::where('is_deleted',0)->where('subcate_id',$subcate->id)->get();
																					@endphp
																					@foreach($resubcate as $resub)
																					<li><a href="#" title="Bluetooth Speakers">{{$resub->resubcate_name}}</a></li>
																					@endforeach
																				</ul>



																			</div>
																			@endforeach
																		</div>
																		

																		<div class="img-banner col-lg-5 col-md-5 col-sm-4">
																			<a href="#"><img src="{{asset('public/frontend/')}}/image/catalog/demo/menu/img-static-megamenu-h.jpg" alt="banner"></a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												@else
												<p class="close-menu"></p>
												<a class="clearfix">
													<span>
														<strong><img src="{{asset('public/uploads/category/'.$menu->cate_icon)}}" alt="">{{$menu->cate_name}}</strong>
													</span>
													
												</a>

												<div class="sub-menu" data-subwidth="65"">
													<div class=" content">
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <div class="html item-1">
                                                                    <div class="label-vertical">
                                                                        <div><a href="#"><span class="color1">Hot!</span>Best Sellers </a></div>
                                                                        <div><a href="#"><span class="color2">New!</span>New Arrivals </a> </div>
                                                                        <div><a href="#"><span class="color3">Sale!</span>Special Offers </a></div>
                                                                    </div>
                                                                    <ul>
                                                                        <li class=""><a href="#" title="Hotel &amp; Resort">Hotel &amp; Resort</a></li>
                                                                        <li class=""><a href="#" title="Best Tours">Best Tours</a></li>
                                                                        <li class=""><a href="#" title="Vacation Rentanls">Vacation Rentanls</a></li>
                                                                        <li class=""><a href="#" title="Infocus">Infocus</a></li>
                                                                        <li class=""><a href="#" title="Restaurants">Restaurants</a></li>
                                                                        <li class=""><a href="#" title="Travel Trekking">Travel Trekking</a></li>
                                                                        <li class=""><a href="#" title="Destinations">Destinations</a></li>
                                                                        <li class=""><a href="#" title="Cruises">Cruises</a></li>
                                                                        <li class=""><a href="#" title="Water Parks">Water Parks</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-7">
                                                                <div class="html ">
                                                                    <div class="row img-banner">
                                                                        <a href="#"><img src="{{asset('public/frontend/')}}/image/catalog/demo/menu/ver-img-1.jpg" alt="banner"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
												    </div>
									</div>
									</li>
									<li class="item-vertical">
										<p class="close-menu"></p>
										<a href="#" class="clearfix">
											<span>
												<strong><img src="{{asset('public/frontend/')}}/image/catalog/demo/menu/icon/icon-3.png" alt="">Book Stationery</strong>
											</span>
										</a>
									</li>
									<li class="item-vertical   item-style3 with-sub-menu hover">
										<p class="close-menu"></p>
										<a class="clearfix">
											<span>
												<strong><img src="{{asset('public/frontend/')}}/image/catalog/demo/menu/icon/icon-4.png" alt="">Fashion</strong>
											</span>
											<b class="fa fa-caret-right"></b>
										</a>
										<div class="sub-menu" style="width: 650px;">
											<div class="content">
												<div class="row">
													<div class="col-sm-12">
														<div class="categories ">
															<div class="row">
																<div class="col-sm-4 static-menu">
																	<div class="menu">
																		<ul>
																			<li>
																				<a href="#" onclick="window.location = '#';" class="main-menu">Digital &amp; Electronics</a>
																				<ul>
																					<li><a href="#" onclick="window.location = '#';">Girls New</a></li>
																					<li><a href="#" onclick="window.location = '#';">Bluetooth Speakers</a></li>
																					<li><a href="#" onclick="window.location = '#';">Pearl mens</a></li>
																					<li><a href="#" onclick="window.location = '#';">Digital &amp; Electronics</a></li>
																					<li><a href="#" onclick="window.location = '#';">Book Stationery</a></li>
																					<li><a href="#" onclick="window.location = '#';">Bluetooth Speakers</a></li>
																					<li><a href="#" onclick="window.location = '#';">Cell &amp; Cable</a></li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																</div>
																<div class="col-sm-4 static-menu">
																	<div class="menu">
																		<ul>
																			<li>
																				<a href="#" onclick="window.location = '#';" class="main-menu">Fashion &amp; Accessories</a>
																				<ul>
																					<li><a href="#" onclick="window.location = '#';">Pearl mens</a></li>
																					<li><a href="#" onclick="window.location = '#';">Girls New</a></li>
																					<li><a href="#" onclick="window.location = '#';">Pearl Jewelry</a></li>
																					<li><a href="#" onclick="window.location = '#';">Spa &amp; Massage</a></li>
																					<li><a href="#" onclick="window.location = '#';">Digital &amp; Electronics</a></li>
																					<li><a href="#" onclick="window.location = '#';">Camera New</a></li>
																					<li><a href="#" onclick="window.location = '#';">Bags</a></li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																</div>
																<div class="col-sm-4 static-menu">
																	<div class="menu">
																		<ul>
																			<li>
																				<a href="#" onclick="window.location = '#';" class="main-menu">Western Wear</a>
																				<ul>
																					<li><a href="#" onclick="window.location = '#';">Video You</a></li>
																					<li><a href="#" onclick="window.location = '#';">Pearl mens</a></li>
																					<li><a href="#" onclick="window.location = '#';">Dress Ladies</a></li>
																					<li><a href="#" onclick="window.location = '#';">Jean</a></li>
																					<li><a href="#" onclick="window.location = '#';">Web Cameras</a></li>
																					<li><a href="#" onclick="window.location = '#';">Laptop &amp; Notebook</a></li>
																					<li><a href="#" onclick="window.location = '#';">Dress Ladies</a></li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="border"></div>
												<div class="row">
													<div class="col-sm-12">
														<div class="link banner-full">
															<img src="{{asset('public/frontend/')}}/image/catalog/demo/menu/menu_bg2.jpg" alt="" style="width: 100%;">
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="item-vertical">
										<p class="close-menu"></p>
										<a class="clearfix">
											<span>
												<strong><img src="{{asset('public/frontend/')}}/image/catalog/demo/menu/icon/icon-5.png" alt="">Sport &amp; Entertaiment</strong>
											</span>
										</a>
									</li>
									<li class="item-vertical  css-menu with-sub-menu hover">
										<p class="close-menu"></p>
										<a href="#" class="clearfix">
											<span>
												<strong><img src="{{asset('public/frontend/')}}/image/catalog/demo/menu/icon/icon-8.png" alt="">Spa &amp; Massage</strong>
											</span>
											<b class="fa fa-caret-right"></b>
										</a>
										<div class="sub-menu" style="width: 250px;">
											<div class="content">
												<div class="row">
													<div class="col-sm-12">
														<div class="categories ">
															<div class="row">
																<div class="col-sm-12 hover-menu">
																	<div class="menu">
																		<ul>
																			<li>
																				<a href="#" onclick="window.location = '#';" class="main-menu">Book Stationery<b class="fa fa-angle-right"></b></a>
																				<ul>
																					<li><a href="#" onclick="window.location = '#';">Camera New</a></li>
																					<li><a href="#" onclick="window.location = '#';">Dress Ladies</a></li>
																					<li><a href="#" onclick="window.location = '#';">Jean</a></li>
																					<li><a href="#" onclick="window.location = '#';">Case</a></li>
																				</ul>
																			</li>
																			<li>
																				<a href="#" onclick="window.location = '#';" class="main-menu">Book Stationery<b class="fa fa-angle-right"></b></a>
																				<ul>
																					<li><a href="#" onclick="window.location = '#';">Girls New</a></li>
																					<li>
																						<a href="#" onclick="window.location = '#';">Pearl mens<b class="fa fa-angle-right"></b></a>
																						<ul>
																							<li><a href="#" onclick="window.location = '#';">Bluetooth Speakers</a></li>
																						</ul>
																					</li>
																					<li><a href="#" onclick="window.location = '#';">Fashion &amp; Accessories</a></li>
																					<li>
																						<a href="#" onclick="window.location = '#';">Trending<b class="fa fa-angle-right"></b></a>
																						<ul>
																							<li><a href="#" onclick="window.location = '#';">Punge nenune</a></li>
																						</ul>
																					</li>
																				</ul>
																			</li>
																			<li><a href="#" onclick="window.location = '#';" class="main-menu">Kitchen</a></li>
																			<li>
																				<a href="#" onclick="window.location = '#';" class="main-menu">Book Stationery<b class="fa fa-angle-right"></b></a>
																				<ul>
																					<li><a href="#" onclick="window.location = '#';">Cell &amp; Cable</a></li>
																					<li><a href="#" onclick="window.location = '#';">Camera New</a></li>
																					<li><a href="#" onclick="window.location = '#';">Digital &amp; Electronics</a></li>
																					<li><a href="#" onclick="window.location = '#';">Pearl mens</a></li>
																				</ul>
																			</li>
																			<li>
																				<a href="#" onclick="window.location = '#';" class="main-menu">Case<b class="fa fa-angle-right"></b></a>
																				<ul>
																					<li>
																						<a href="#" onclick="window.location = '#';">Bluetooth Speakers<b class="fa fa-angle-right"></b></a>
																						<ul>
																							<li><a href="#" onclick="window.location = '#';">Cell &amp; Cable</a></li>
																							<li><a href="#" onclick="window.location = '#';">Bags</a></li>
																							<li><a href="#" onclick="window.location = '#';">Women Fashion</a></li>
																						</ul>
																					</li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class="item-vertical">
										<p class="close-menu"></p>
										<a href="#" class="clearfix">
											<span>
												<strong><img src="{{asset('public/frontend/')}}/image/catalog/demo/menu/icon/icon-9.png" alt="">Real House</strong>
											</span>
										</a>
									</li>
									<li class="item-vertical">
										<p class="close-menu"></p>
										<a href="#" class="clearfix">
											<span>
												<strong><img src="{{asset('public/frontend/')}}/image/catalog/demo/menu/icon/icon-6.png" alt="">Mom &amp; Baby</strong>
											</span>
										</a>
									</li>
									<li class="item-vertical">
										<p class="close-menu"></p>
										<a href="#" class="clearfix">
											<span>
												<strong><img src="{{asset('public/frontend/')}}/image/catalog/demo/menu/icon/icon-7.png" alt="">Food &amp; Restaurant</strong>
											</span>
										</a>
									</li>
									<li class="item-vertical">
										<p class="close-menu"></p>
										<a href="#" class="clearfix">
											<span>
												<strong><img src="{{asset('public/frontend/')}}/image/catalog/demo/menu/icon/icon-9.png" alt="">Jewelry &amp; Watches</strong>
											</span>
											<span class="labelho"></span>
										</a>
									</li>


												@endif
											</li>
										@endforeach

									<li class="loadmore"><i class="fa fa-plus-square"></i><span class="more-view"> More Categories</span></li>
									</ul>
								</div>
							</div>
						</div>
				    </div>
				</nav>
			</div>
		</div>
	</div>
</div>
</div>
<!--- SLider right-->
