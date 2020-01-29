<!-- Header center -->
<div class="header-center">
		<div class="container">
			<div class="row">
				<!-- Menuhome -->
				<div class="col-lg-8 col-md-8 col-sm-1 col-xs-3 header-menu">
					<div class="megamenu-style-dev megamenu-dev">
						<div class="responsive">
							<nav class="navbar-default">
								<div class="container-megamenu horizontal">
									<div class="navbar-header">
										<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<div class="megamenu-wrapper">
										<span id="remove-megamenu" class="fa fa-times"></span>
										<div class="megamenu-pattern">
											<div class="container">
												<ul class="megamenu" data-transition="slide" data-animationtime="500">
													<li class="">
														<p class="close-menu"></p>
														<a href="{{url('/')}}" class="clearfix">
															<strong>
																Home
															</strong>
														</a>
													</li>
													<li class="full-width option2 with-sub-menu hover">
														<p class="close-menu"></p>
														<a class="clearfix">
															<strong>
																Features
															</strong>
															<span class="labelopencart"></span>
															<b class="caret"></b>
														</a>
														<div class="sub-menu" style="width: 100%;">
															<div class="content">
																<div class="row">
																	<div class="col-sm-12">
																		<div class="html ">
																			<div class="row">
																				<div class="col-md-3">
																					<div class="column">
																						<a href="#" class="title-submenu">Listing pages</a>
																						<div>
																							<ul class="row-list">
																								<li><a href="">Product </a></li>
																								<li><a href="category-v2.html">Category Page 2</a></li>
																								<li><a href="category-v3.html">Category Page 3</a></li>
																							</ul>

																						</div>
																					</div>
																				</div>
																				<div class="col-md-3">
																					<div class="column">
																						<a href="#" class="title-submenu">Product pages</a>
																						<div>
																							<ul class="row-list">
																								<li><a href="">Product Details</a></li>
																								<li><a href="product-v2.html">Image size - medium</a></li>
																								<li><a href="product-v3.html">Image size - big</a></li>
																							</ul>
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3">
																					<div class="column">
																						<a href="#" class="title-submenu">Shopping pages</a>
																						<div>
																							<ul class="row-list">
																								<li><a href="{{route('product.cart.add')}}">Shopping Cart Page</a></li>
																								<li><a href="{{route('product.checkout')}}">Checkout Page</a></li>
																								<li><a href="{{route('product.compare')}}">Compare Page</a></li>
																								<li><a href="{{route('product.wishlist')}}">Wishlist Page</a></li>

																							</ul>
																						</div>
																					</div>
																				</div>
																				<div class="col-md-3">
																					<div class="column">
																						<a href="#" class="title-submenu">My Account pages</a>
																						<div>
																							<ul class="row-list">
																								<li><a href="{{route('login')}}">Login Page</a></li>
																								<li><a href="{{route('register')}}">Register Page</a></li>
																								<li><a href="{{route('customer.account')}}">My Account</a></li>
																								<li><a href="{{route('customer.order')}}">Order History</a></li>
																								<li><a href="{{route('customer.order.info')}}">Order Information</a></li>
																								<li><a href="{{route('customer.order.return')}}">Product Returns</a></li>
																								<li><a href="{{route('customer.gift.voucher')}}">Gift Voucher</a></li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="item-style1 content-full with-sub-menu hover">
														<p class="close-menu"></p>
														<a class="clearfix">
															<strong>
																Colections
															</strong>
															<span class="labelNew"></span>
															<b class="caret"></b>
														</a>
														<div class="sub-menu" style="width: 100%; right: 0px;">
															<div class="content">
																<div class="row">
																	<div class="col-sm-3">
																		<div class="link ">
																			<img src="{{asset('public/frontend/image/catalog/demo/menu/menu-img1.jpg')}}" alt="" style="width: 100%;">
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="link ">
																			<img src="{{asset('public/frontend/image/catalog/demo/menu/menu-img2.jpg')}}" alt="" style="width: 100%;">
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="link ">
																			<img src="{{asset('public/frontend/image/catalog/demo/menu/menu-img3.jpg')}}" alt="" style="width: 100%;">
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="link ">
																			<img src="{{asset('public/frontend/image/catalog/demo/menu/menu-img4.jpg')}}" alt="" style="width: 100%;">
																		</div>
																	</div>
																</div>
																<div class="border"></div>
																<div class="row">
																	<div class="col-sm-3">
																		<div class="categories ">
																			<div class="row">
																				<div class="col-sm-12 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="category-v3.html" onclick="window.location = '#';" class="main-menu">Food &amp; Restaurant</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
																									<li><a href="#" onclick="window.location = '#';">Women Fashion</a></li>
																									<li><a href="#" onclick="window.location = '#';">Bags</a></li>
																									<li><a href="#" onclick="window.location = '#';">Fashion</a></li>
																									<li><a href="#" onclick="window.location = '#';">Trending</a></li>
																									<li><a href="#" onclick="window.location = '#';">Macs</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="categories ">
																			<div class="row">
																				<div class="col-sm-12 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Fashion &amp; Accessories</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Pearl Jewelry</a></li>
																									<li><a href="#" onclick="window.location = '#';">Destinations</a></li>
																									<li><a href="#" onclick="window.location = '#';">Camera New</a></li>
																									<li><a href="#" onclick="window.location = '#';">Spa &amp; Massage</a></li>
																									<li><a href="#" onclick="window.location = '#';">Camera New</a></li>
																									<li><a href="#" onclick="window.location = '#';">Cell &amp; Cable</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="categories ">
																			<div class="row">
																				<div class="col-sm-12 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Sport &amp; Entertaiment</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
																									<li><a href="#" onclick="window.location = '#';">Fashion &amp; Accessories</a></li>
																									<li><a href="#" onclick="window.location = '#';">Bags</a></li>
																									<li><a href="#" onclick="window.location = '#';">Men Fashion</a></li>
																									<li><a href="#" onclick="window.location = '#';">Knage unget</a></li>
																									<li><a href="#" onclick="window.location = '#';">Qunge genga</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="categories ">
																			<div class="row">
																				<div class="col-sm-12 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Mobile &amp; Table</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Web Cameras</a></li>
																									<li><a href="#" onclick="window.location = '#';">Windows</a></li>
																									<li><a href="#" onclick="window.location = '#';">Pearl mens</a></li>
																									<li><a href="#" onclick="window.location = '#';">Pearl Jewelry</a></li>
																									<li><a href="#" onclick="window.location = '#';">Spa &amp; Massage</a></li>
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
													<li class="item-style2 content-full feafute with-sub-menu hover">
														<p class="close-menu"></p>
														<a class="clearfix">
															<strong>
																Accessories
															</strong>
															<b class="caret"></b>
														</a>
														<div class="sub-menu" style="width: 100%">
															<div class="content">
																<div class="row">
																	<div class="col-sm-8">
																		<div class="categories ">
																			<div class="row">
																				<div class="col-sm-4 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Fashion &amp; Accessories</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Digital &amp; Electronics</a></li>
																									<li><a href="#" onclick="window.location = '#';">Bluetooth Speakers</a></li>
																									<li><a href="#" onclick="window.location = '#';">Cell &amp; Cable</a></li>
																									<li><a href="#" onclick="window.location = '#';">Spa &amp; Massage</a></li>
																									<li><a href="#" onclick="window.location = '#';">Sport &amp; Entertaiment</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Pearl mens</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Web Cameras</a></li>
																									<li><a href="#" onclick="window.location = '#';">Windows</a></li>
																									<li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
																									<li><a href="#" onclick="window.location = '#';">Knage unget</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-sm-4 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Sport &amp; Entertaiment</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Jean</a></li>
																									<li><a href="#" onclick="window.location = '#';">Latenge mange</a></li>
																									<li><a href="#" onclick="window.location = '#';">Punge nenune</a></li>
																									<li><a href="#" onclick="window.location = '#';">Trending</a></li>
																									<li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Mobile &amp; Table</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Case</a></li>
																									<li><a href="#" onclick="window.location = '#';">Laptop &amp; Notebook</a></li>
																									<li><a href="#" onclick="window.location = '#';">Laptops &amp; Notebooks</a></li>
																									<li><a href="#" onclick="window.location = '#';">Dress Ladies</a></li>
																									<li><a href="#" onclick="window.location = '#';">Kitchen</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-sm-4 static-menu">
																					<div class="menu">
																						<ul>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Cell &amp; Cable</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Bluetooth Speakers</a></li>
																									<li><a href="#" onclick="window.location = '#';">Fashion &amp; Accessories</a></li>
																									<li><a href="#" onclick="window.location = '#';">Qunge genga</a></li>
																									<li><a href="#" onclick="window.location = '#';">Punge nenune</a></li>
																									<li><a href="#" onclick="window.location = '#';">Punge nenune</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#" onclick="window.location = '#';" class="main-menu">Food &amp; Restaurant</a>
																								<ul>
																									<li><a href="#" onclick="window.location = '#';">Fashion</a></li>
																									<li><a href="#" onclick="window.location = '#';">Bags</a></li>
																									<li><a href="#" onclick="window.location = '#';">Necklaces</a></li>
																									<li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
																									<li><a href="#" onclick="window.location = '#';">Men Fashion</a></li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<div class="product best-sellers-menu">
																			<div class="image">
																				<a href="#" onclick="window.location = '#'"><img src="{{asset('public/frontend/')}}/image/catalog/demo/product/fashion/24.png" alt=""></a>
																			</div>
																			<div class="name"><a href="#" onclick="window.location = '#'">Est Officia Including Shoes Beautiful Pieces Canaz</a></div>
																			<div class="price">
																				$98.00
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="style-page with-sub-menu hover">
														<p class="close-menu"></p>
														<a class="clearfix">
															<strong>
																Pages
															</strong>
															<b class="caret"></b>
														</a>
														<div class="sub-menu" style="width: 40%;">
															<div class="content">
																<div class="row">
																	<div class="col-md-6">
																		<ul class="row-list">
																			<li><a class="subcategory_item" href="faq.html">FAQ</a></li>

																			<li><a class="subcategory_item" href="sitemap.html">Site Map</a></li>
                                                                        <li><a class="subcategory_item" href="{{ route('frontend.contract.us.index') }}">Contact us</a></li>
																			<li><a class="subcategory_item" href="banner-effect.html">Banner Effect</a></li>
																		</ul>
																	</div>
																	<div class="col-md-6">
																		<ul class="row-list">
																			<li><a class="subcategory_item" href="about-us.html">About Us 1</a></li>
																			<li><a class="subcategory_item" href="about-us-2.html">About Us 2</a></li>
																			<li><a class="subcategory_item" href="about-us-3.html">About Us 3</a></li>
																			<li><a class="subcategory_item" href="about-us-4.html">About Us 4</a></li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</li>


													<li class="">
														<p class="close-menu"></p>
														<a href="blog-page.html" class="clearfix">
															<strong>
																Blog
															</strong>
														</a>
													</li>

													<!-- About us menu start -->
													<li class="">
														<p class="close-menu"></p>
														<a href="{{route('about.us')}}" class="clearfix">
															<strong>
																About Us
															</strong>
														</a>
													</li>
													<!-- About us menu end -->

													<li class="deal-h5 hidden">
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															<strong>
																<img src="{{asset('public/frontend/')}}/image/catalog/demo/menu/hot-block.png" alt="">Buy This Theme!
															</strong>
														</a>
													</li>
													<li class="deal-h5 hidden">
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															<strong>
																Today Deals
															</strong>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</nav>
						</div>
					</div>
				</div>
				<!--Searchhome-->
				<div class="col-lg-4 col-md-4 col-sm-11 col-xs-9 header-search">
					<div id="sosearchpro" class="sosearchpro-wrapper so-search ">
						<form method="GET" action="index.php">
							<div id="search0" class="search input-group form-group">
								<div class="select_category filter_type  icon-select">
									<select class="no-border" name="category_id">
										<option value="0">All Categories </option>
										<option value="82 ">Book Stationery </option>
										<option value="65">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Girls New </option>
										<option value="56">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kitchen </option>
										<option value="61">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pearl mens </option>
										<option value="38 ">Laptop &amp; Notebook </option>
										<option value="52 ">Spa &amp; Massage </option>
										<option value="44">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Latenge mange </option>
										<option value="53">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Necklaces </option>
										<option value="54">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pearl Jewelry </option>
										<option value="55">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Slider 925 </option>
										<option value="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phones &amp; PDAs </option>
										<option value="59 ">Sport &amp; Entertaiment </option>
										<option value="69">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Camping &amp; Hiking </option>
										<option value="70">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cusen mariot </option>
										<option value="74">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Engite nanet </option>
										<option value="64">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fashion </option>
										<option value="66">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Men </option>
										<option value="60 ">Travel &amp; Vacation </option>
										<option value="71">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Best Tours </option>
										<option value="72">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cruises </option>
										<option value="73">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Destinations </option>
										<option value="67">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hotel &amp; Resort </option>
										<option value="63">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Infocus </option>
										<option value="18 ">Laptops &amp; Notebooks </option>
										<option value="46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Macs </option>
										<option value="45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Windows </option>
										<option value="34 ">Food &amp; Restaurant </option>
										<option value="47">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hanet magente </option>
										<option value="43">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Knage unget </option>
										<option value="48">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Punge nenune </option>
										<option value="49">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qunge genga </option>
										<option value="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tange manue </option>
										<option value="51">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Web Cameras </option>
										<option value="39 ">Shop Collection </option>
										<option value="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hanet magente </option>
										<option value="41">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Knage unget </option>
										<option value="42">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Latenge mange </option>
										<option value="58">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Punge nenune </option>
										<option value="17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qunge genga </option>
										<option value="57">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tange manue </option>
										<option value="35 ">Fashion &amp; Accessories </option>
										<option value="36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dress Ladies </option>
										<option value="31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jean </option>
										<option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Men Fashion </option>
										<option value="88">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T-shirt </option>
										<option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trending </option>
										<option value="37">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Western Wear </option>
										<option value="20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Women Fashion </option>
										<option value="32">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bags </option>
										<option value="33 ">Digital &amp; Electronics </option>
										<option value="83">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cell Computers </option>
										<option value="84">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Computer Accessories </option>
										<option value="85">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Computer Headsets </option>
										<option value="86">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Desna Jacket </option>
										<option value="87">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Electronics </option>
										<option value="89">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Headphone </option>
										<option value="90">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Laptops </option>
										<option value="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mobiles </option>
										<option value="79">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sound </option>
										<option value="80">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; USB &amp; HDD </option>
										<option value="81">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VGA and CPU </option>
										<option value="62">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Video &amp; Camera </option>
										<option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Video You </option>
										<option value="75">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wireless Speakers </option>
										<option value="29">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Camera New </option>
										<option value="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Case </option>
										<option value="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cell &amp; Cable </option>
										<option value="77">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mobile &amp; Table </option>
										<option value="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bluetooth Speakers </option>
									</select>
								</div>
								<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">

								<span class="input-group-btn">
									<button type="submit" class="button-search btn btn-default btn-lg" name="submit_search"><i class="fa fa-search"></i><span class="hidden">Search</span></button>
								</span>
							</div>
							<input type="hidden" name="route" value="product/search">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Header center -->
