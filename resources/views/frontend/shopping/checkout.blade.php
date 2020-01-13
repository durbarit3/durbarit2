@extends('layouts.websiteapp')
@section('main_content') 
 
<!-- Main Container  -->
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Checkout</a></li>
		</ul>
		<div class="row">
			<div id="content" class="col-sm-12">
				<h1>So Onepage Checkout</h1>
				<div class="so-onepagecheckout layout1">
					<div class="col-left col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="checkout-content login-box">
							<h2 class="secondary-title"><i class="fa fa-user"></i>Create an Account or Login</h2>
							<div class="box-inner">
								<div class="radio">
									<label>
										<input type="radio" name="account" value="register" checked="checked">Register Account</label>
								</div>

								<div class="radio">
									<label>
										<input type="radio" name="account" value="guest">Guest Checkout</label>
								</div>

								<div class="radio">
									<label>
										<input type="radio" name="account" value="login">Returning Customer</label>
								</div>
							</div>
						</div>

						<div class="checkout-content checkout-login" style="">
							<fieldset>
								<h2 class="secondary-title"><i class="fa fa-unlock"></i>Returning Customer</h2>
								<div class="box-inner">
									<div class="form-group">
										<input type="text" name="login_email" value="" placeholder="E-Mail" id="input-login_email" class="form-control">
									</div>
									<div class="form-group">
										<input type="password" name="login_password" value="" placeholder="Password" id="input-login_password" class="form-control">
										<a href="#">Forgotten Password</a>
									</div>
									<div class="form-group">
										<input type="button" value="Login" id="button-login" data-loading-text="Loading..." class="btn-primary button">
									</div>
								</div>
							</fieldset>
						</div>

						<div class="checkout-content checkout-register">
							<fieldset id="account">
								<h2 class="secondary-title"><i class="fa fa-user-plus"></i>Your Personal Details</h2>
								<div class="payment-new box-inner">
									<div class="form-group customer-group" style="display: none">
										<label class="control-label">Customer Group</label>
										<div class="radio">
											<label>
												<input type="radio" name="customer_group_id" value="1" checked="checked"> Default
											</label>
										</div>
									</div>
									<div class="form-group input-firstname required" style="width: 49%; float: left;">
										<input type="text" name="firstname" value="" placeholder="First Name *" id="input-payment-firstname" class="form-control">
									</div>
									<div class="form-group input-lastname required" style="width: 49%; float: right;">
										<input type="text" name="lastname" value="" placeholder="Last Name *" id="input-payment-lastname" class="form-control">
									</div>
									<div class="form-group required">
										<input type="text" name="email" value="" placeholder="E-Mail *" id="input-payment-email" class="form-control">
									</div>
									<div class="form-group required">
										<input type="text" name="telephone" value="" placeholder="Telephone *" id="input-payment-telephone" class="form-control">
									</div>
									<div class="form-group fax-input">
										<input type="text" name="fax" value="" placeholder="Fax" id="input-payment-fax" class="form-control">
									</div>
								</div>
							</fieldset>
							<fieldset id="password" style="display: block;">
								<h2 class="secondary-title"><i class="fa fa-lock"></i>Your Password</h2>
								<div class="box-inner">
									<div class="form-group required">
										<input type="password" name="password" value="" placeholder="Password *" id="input-payment-password" class="form-control">
									</div>
									<div class="form-group required">
										<input type="password" name="confirm" value="" placeholder="Password Confirm *" id="input-payment-confirm" class="form-control">
									</div>
								</div>
							</fieldset>
							<fieldset id="address">
								<h2 class="secondary-title"><i class="fa fa-map-marker"></i>Your Address</h2>
								<div class=" checkout-payment-form">
									<div class="box-inner">
										<form class="form-horizontal form-payment">
											<div id="payment-new" style="display: block">
												<div class="form-group company-input">
													<input type="text" name="payment_company" value="" placeholder="Company" id="input-payment-company" class="form-control">
												</div>
												<div class="form-group required">
													<input type="text" name="payment_address_1" value="" placeholder="Address 1 *" id="input-payment-address-1" class="form-control">
												</div>
												<div class="form-group address-2-input">
													<input type="text" name="payment_address_2" value="" placeholder="Address 2" id="input-payment-address-2" class="form-control">
												</div>
												<div class="form-group required">
													<input type="text" name="payment_city" value="" placeholder="City *" id="input-payment-city" class="form-control">
												</div>
												<div class="form-group">
													<input type="text" name="payment_postcode" value="" placeholder="Post Code *" id="input-payment-postcode" class="form-control">
												</div>
												<div class="form-group required">
													<select name="payment_country_id" id="input-payment-country" class="form-control">
														<option value=""> --- Please Select --- </option>
														<option value="244">Aaland Islands</option>
														<option value="1">Afghanistan</option>
														<option value="2">Albania</option>
														<option value="3">Algeria</option>
														<option value="4">American Samoa</option>
														<option value="5">Andorra</option>
														<option value="6">Angola</option>
														<option value="7">Anguilla</option>
														<option value="8">Antarctica</option>
														<option value="9">Antigua and Barbuda</option>
														<option value="10">Argentina</option>
														<option value="11">Armenia</option>
														<option value="12">Aruba</option>
														<option value="252">Ascension Island (British)</option>
														<option value="13">Australia</option>
														<option value="14">Austria</option>
														<option value="15">Azerbaijan</option>
														<option value="16">Bahamas</option>
														<option value="17">Bahrain</option>
														<option value="18">Bangladesh</option>
														<option value="19">Barbados</option>
														<option value="20">Belarus</option>
														<option value="21">Belgium</option>
														<option value="22">Belize</option>
														<option value="23">Benin</option>
														<option value="24">Bermuda</option>
														<option value="25">Bhutan</option>
														<option value="26">Bolivia</option>
														<option value="245">Bonaire, Sint Eustatius and Saba</option>
														<option value="27">Bosnia and Herzegovina</option>
														<option value="28">Botswana</option>
														<option value="29">Bouvet Island</option>
														<option value="30">Brazil</option>
														<option value="31">British Indian Ocean Territory</option>
														<option value="32">Brunei Darussalam</option>
														<option value="33">Bulgaria</option>
														<option value="34">Burkina Faso</option>
														<option value="35">Burundi</option>
														<option value="36">Cambodia</option>
														<option value="37">Cameroon</option>
														<option value="38">Canada</option>
														<option value="251">Canary Islands</option>
														<option value="39">Cape Verde</option>
														<option value="40">Cayman Islands</option>
														<option value="41">Central African Republic</option>
														<option value="42">Chad</option>
														<option value="43">Chile</option>
														<option value="44">China</option>
														<option value="45">Christmas Island</option>
														<option value="46">Cocos (Keeling) Islands</option>
														<option value="47">Colombia</option>
														<option value="48">Comoros</option>
														<option value="49">Congo</option>
														<option value="50">Cook Islands</option>
														<option value="51">Costa Rica</option>
														<option value="52">Cote D'Ivoire</option>
														<option value="53">Croatia</option>
														<option value="54">Cuba</option>
														<option value="246">Curacao</option>
														<option value="55">Cyprus</option>
														<option value="56">Czech Republic</option>
														<option value="237">Democratic Republic of Congo</option>
														<option value="57">Denmark</option>
														<option value="58">Djibouti</option>
														<option value="59">Dominica</option>
														<option value="60">Dominican Republic</option>
														<option value="61">East Timor</option>
														<option value="62">Ecuador</option>
														<option value="63">Egypt</option>
														<option value="64">El Salvador</option>
														<option value="65">Equatorial Guinea</option>
														<option value="66">Eritrea</option>
														<option value="67">Estonia</option>
														<option value="68">Ethiopia</option>
														<option value="69">Falkland Islands (Malvinas)</option>
														<option value="70">Faroe Islands</option>
														<option value="71">Fiji</option>
														<option value="72">Finland</option>
														<option value="74">France, Metropolitan</option>
														<option value="75">French Guiana</option>
														<option value="76">French Polynesia</option>
														<option value="77">French Southern Territories</option>
														<option value="126">FYROM</option>
														<option value="78">Gabon</option>
														<option value="79">Gambia</option>
														<option value="80">Georgia</option>
														<option value="81">Germany</option>
														<option value="82">Ghana</option>
														<option value="83">Gibraltar</option>
														<option value="84">Greece</option>
														<option value="85">Greenland</option>
														<option value="86">Grenada</option>
														<option value="87">Guadeloupe</option>
														<option value="88">Guam</option>
														<option value="89">Guatemala</option>
														<option value="256">Guernsey</option>
														<option value="90">Guinea</option>
														<option value="91">Guinea-Bissau</option>
														<option value="92">Guyana</option>
														<option value="93">Haiti</option>
														<option value="94">Heard and Mc Donald Islands</option>
														<option value="95">Honduras</option>
														<option value="96">Hong Kong</option>
														<option value="97">Hungary</option>
														<option value="98">Iceland</option>
														<option value="99">India</option>
														<option value="100">Indonesia</option>
														<option value="101">Iran (Islamic Republic of)</option>
														<option value="102">Iraq</option>
														<option value="103">Ireland</option>
														<option value="254">Isle of Man</option>
														<option value="104">Israel</option>
														<option value="105">Italy</option>
														<option value="106">Jamaica</option>
														<option value="107">Japan</option>
														<option value="257">Jersey</option>
														<option value="108">Jordan</option>
														<option value="109">Kazakhstan</option>
														<option value="110">Kenya</option>
														<option value="111">Kiribati</option>
														<option value="253">Kosovo, Republic of</option>
														<option value="114">Kuwait</option>
														<option value="115">Kyrgyzstan</option>
														<option value="116">Lao People's Democratic Republic</option>
														<option value="117">Latvia</option>
														<option value="118">Lebanon</option>
														<option value="119">Lesotho</option>
														<option value="120">Liberia</option>
														<option value="121">Libyan Arab Jamahiriya</option>
														<option value="122">Liechtenstein</option>
														<option value="123">Lithuania</option>
														<option value="124">Luxembourg</option>
														<option value="125">Macau</option>
														<option value="127">Madagascar</option>
														<option value="128">Malawi</option>
														<option value="129">Malaysia</option>
														<option value="130">Maldives</option>
														<option value="131">Mali</option>
														<option value="132">Malta</option>
														<option value="133">Marshall Islands</option>
														<option value="134">Martinique</option>
														<option value="135">Mauritania</option>
														<option value="136">Mauritius</option>
														<option value="137">Mayotte</option>
														<option value="138">Mexico</option>
														<option value="139">Micronesia, Federated States of</option>
														<option value="140">Moldova, Republic of</option>
														<option value="141">Monaco</option>
														<option value="142">Mongolia</option>
														<option value="242">Montenegro</option>
														<option value="143">Montserrat</option>
														<option value="144">Morocco</option>
														<option value="145">Mozambique</option>
														<option value="146">Myanmar</option>
														<option value="147">Namibia</option>
														<option value="148">Nauru</option>
														<option value="149">Nepal</option>
														<option value="150">Netherlands</option>
														<option value="151">Netherlands Antilles</option>
														<option value="152">New Caledonia</option>
														<option value="153">New Zealand</option>
														<option value="154">Nicaragua</option>
														<option value="155">Niger</option>
														<option value="156">Nigeria</option>
														<option value="157">Niue</option>
														<option value="158">Norfolk Island</option>
														<option value="112">North Korea</option>
														<option value="159">Northern Mariana Islands</option>
														<option value="160">Norway</option>
														<option value="161">Oman</option>
														<option value="162">Pakistan</option>
														<option value="163">Palau</option>
														<option value="247">Palestinian Territory, Occupied</option>
														<option value="164">Panama</option>
														<option value="165">Papua New Guinea</option>
														<option value="166">Paraguay</option>
														<option value="167">Peru</option>
														<option value="168">Philippines</option>
														<option value="169">Pitcairn</option>
														<option value="170">Poland</option>
														<option value="171">Portugal</option>
														<option value="172">Puerto Rico</option>
														<option value="173">Qatar</option>
														<option value="174">Reunion</option>
														<option value="175">Romania</option>
														<option value="176">Russian Federation</option>
														<option value="177">Rwanda</option>
														<option value="178">Saint Kitts and Nevis</option>
														<option value="179">Saint Lucia</option>
														<option value="180">Saint Vincent and the Grenadines</option>
														<option value="181">Samoa</option>
														<option value="182">San Marino</option>
														<option value="183">Sao Tome and Principe</option>
														<option value="184">Saudi Arabia</option>
														<option value="185">Senegal</option>
														<option value="243">Serbia</option>
														<option value="186">Seychelles</option>
														<option value="187">Sierra Leone</option>
														<option value="188">Singapore</option>
														<option value="189">Slovak Republic</option>
														<option value="190">Slovenia</option>
														<option value="191">Solomon Islands</option>
														<option value="192">Somalia</option>
														<option value="193">South Africa</option>
														<option value="194">South Georgia &amp; South Sandwich Islands</option>
														<option value="113">South Korea</option>
														<option value="248">South Sudan</option>
														<option value="195">Spain</option>
														<option value="196">Sri Lanka</option>
														<option value="249">St. Barthelemy</option>
														<option value="197">St. Helena</option>
														<option value="250">St. Martin (French part)</option>
														<option value="198">St. Pierre and Miquelon</option>
														<option value="199">Sudan</option>
														<option value="200">Suriname</option>
														<option value="201">Svalbard and Jan Mayen Islands</option>
														<option value="202">Swaziland</option>
														<option value="203">Sweden</option>
														<option value="204">Switzerland</option>
														<option value="205">Syrian Arab Republic</option>
														<option value="206">Taiwan</option>
														<option value="207">Tajikistan</option>
														<option value="208">Tanzania, United Republic of</option>
														<option value="209">Thailand</option>
														<option value="210">Togo</option>
														<option value="211">Tokelau</option>
														<option value="212">Tonga</option>
														<option value="213">Trinidad and Tobago</option>
														<option value="255">Tristan da Cunha</option>
														<option value="214">Tunisia</option>
														<option value="215">Turkey</option>
														<option value="216">Turkmenistan</option>
														<option value="217">Turks and Caicos Islands</option>
														<option value="218">Tuvalu</option>
														<option value="219">Uganda</option>
														<option value="220">Ukraine</option>
														<option value="221">United Arab Emirates</option>
														<option value="222">United Kingdom</option>
														<option value="223" selected="selected">United States</option>
														<option value="224">United States Minor Outlying Islands</option>
														<option value="225">Uruguay</option>
														<option value="226">Uzbekistan</option>
														<option value="227">Vanuatu</option>
														<option value="228">Vatican City State (Holy See)</option>
														<option value="229">Venezuela</option>
														<option value="230">Viet Nam</option>
														<option value="231">Virgin Islands (British)</option>
														<option value="232">Virgin Islands (U.S.)</option>
														<option value="233">Wallis and Futuna Islands</option>
														<option value="234">Western Sahara</option>
														<option value="235">Yemen</option>
														<option value="238">Zambia</option>
														<option value="239">Zimbabwe</option>
													</select>
												</div>
												<div class="form-group required">
													<select name="payment_zone_id" id="input-payment-zone" class="form-control">
														<option value=""> --- Please Select --- </option>
														<option value="3613">Alabama</option>
														<option value="3614">Alaska</option>
														<option value="3615">American Samoa</option>
														<option value="3616">Arizona</option>
														<option value="3617">Arkansas</option>
														<option value="3618">Armed Forces Africa</option>
														<option value="3619">Armed Forces Americas</option>
														<option value="3620">Armed Forces Canada</option>
														<option value="3621">Armed Forces Europe</option>
														<option value="3622">Armed Forces Middle East</option>
														<option value="3623">Armed Forces Pacific</option>
														<option value="3624">California</option>
														<option value="3625">Colorado</option>
														<option value="3626">Connecticut</option>
														<option value="3627">Delaware</option>
														<option value="3628">District of Columbia</option>
														<option value="3629">Federated States Of Micronesia</option>
														<option value="3630">Florida</option>
														<option value="3631">Georgia</option>
														<option value="3632">Guam</option>
														<option value="3633">Hawaii</option>
														<option value="3634">Idaho</option>
														<option value="3635">Illinois</option>
														<option value="3636">Indiana</option>
														<option value="3637">Iowa</option>
														<option value="3638">Kansas</option>
														<option value="3639">Kentucky</option>
														<option value="3640">Louisiana</option>
														<option value="3641">Maine</option>
														<option value="3642">Marshall Islands</option>
														<option value="3643">Maryland</option>
														<option value="3644">Massachusetts</option>
														<option value="3645">Michigan</option>
														<option value="3646">Minnesota</option>
														<option value="3647">Mississippi</option>
														<option value="3648">Missouri</option>
														<option value="3649">Montana</option>
														<option value="3650">Nebraska</option>
														<option value="3651">Nevada</option>
														<option value="3652">New Hampshire</option>
														<option value="3653">New Jersey</option>
														<option value="3654">New Mexico</option>
														<option value="3655" selected="selected">New York</option>
														<option value="3656">North Carolina</option>
														<option value="3657">North Dakota</option>
														<option value="3658">Northern Mariana Islands</option>
														<option value="3659">Ohio</option>
														<option value="3660">Oklahoma</option>
														<option value="3661">Oregon</option>
														<option value="3662">Palau</option>
														<option value="3663">Pennsylvania</option>
														<option value="3664">Puerto Rico</option>
														<option value="3665">Rhode Island</option>
														<option value="3666">South Carolina</option>
														<option value="3667">South Dakota</option>
														<option value="3668">Tennessee</option>
														<option value="3669">Texas</option>
														<option value="3670">Utah</option>
														<option value="3671">Vermont</option>
														<option value="3672">Virgin Islands</option>
														<option value="3673">Virginia</option>
														<option value="3674">Washington</option>
														<option value="3675">West Virginia</option>
														<option value="3676">Wisconsin</option>
														<option value="3677">Wyoming</option>
													</select>
												</div>
											</div>
										</form>
									</div>
								</div>
								<input type="hidden" name="default_zone_id" id="default_zone_id" value="3655">
							</fieldset>

							<div class="checkbox">
								<label>
									<input type="checkbox" name="shipping_address" value="1" checked="checked"> My delivery and billing addresses are the same.
								</label>
							</div>
							<fieldset id="shipping-address" style="display: none">
								<h2 class="secondary-title"><i class="fa fa-map-marker"></i>Shipping Address</h2>
								<div class=" checkout-shipping-form">
									<div class="box-inner">
										<form class="form-horizontal form-shipping">
											<div id="shipping-new" style="display: block">
												<div class="form-group required">
													<input type="text" name="shipping_firstname" value=" *" placeholder="First Name" id="input-shipping-firstname" class="form-control">
												</div>
												<div class="form-group required">
													<input type="text" name="shipping_lastname" value="" placeholder="Last Name *" id="input-shipping-lastname" class="form-control">
												</div>
												<div class="form-group company-input">
													<input type="text" name="shipping_company" value="" placeholder="Company" id="input-shipping-company" class="form-control">
												</div>
												<div class="form-group required">
													<input type="text" name="shipping_address_1" value="" placeholder="Address 1 *" id="input-shipping-address-1" class="form-control">
												</div>
												<div class="form-group address-2-input">
													<input type="text" name="shipping_address_2" value="" placeholder="Address 2" id="input-shipping-address-2" class="form-control">
												</div>
												<div class="form-group required">
													<input type="text" name="shipping_city" value="" placeholder="City *" id="input-shipping-city" class="form-control">
												</div>
												<div class="form-group">
													<input type="text" name="shipping_postcode" value="" placeholder="Post Code *" id="input-shipping-postcode" class="form-control">
												</div>
												<div class="form-group required">
													<select name="shipping_country_id" id="input-shipping-country" class="form-control">
														<option value=""> --- Please Select --- </option>
														<option value="244">Aaland Islands</option>
														<option value="1">Afghanistan</option>
														<option value="2">Albania</option>
														<option value="3">Algeria</option>
														<option value="4">American Samoa</option>
														<option value="5">Andorra</option>
														<option value="6">Angola</option>
														<option value="7">Anguilla</option>
														<option value="8">Antarctica</option>
														<option value="9">Antigua and Barbuda</option>
														<option value="10">Argentina</option>
														<option value="11">Armenia</option>
														<option value="12">Aruba</option>
														<option value="252">Ascension Island (British)</option>
														<option value="13">Australia</option>
														<option value="14">Austria</option>
														<option value="15">Azerbaijan</option>
														<option value="16">Bahamas</option>
														<option value="17">Bahrain</option>
														<option value="18">Bangladesh</option>
														<option value="19">Barbados</option>
														<option value="20">Belarus</option>
														<option value="21">Belgium</option>
														<option value="22">Belize</option>
														<option value="23">Benin</option>
														<option value="24">Bermuda</option>
														<option value="25">Bhutan</option>
														<option value="26">Bolivia</option>
														<option value="245">Bonaire, Sint Eustatius and Saba</option>
														<option value="27">Bosnia and Herzegovina</option>
														<option value="28">Botswana</option>
														<option value="29">Bouvet Island</option>
														<option value="30">Brazil</option>
														<option value="31">British Indian Ocean Territory</option>
														<option value="32">Brunei Darussalam</option>
														<option value="33">Bulgaria</option>
														<option value="34">Burkina Faso</option>
														<option value="35">Burundi</option>
														<option value="36">Cambodia</option>
														<option value="37">Cameroon</option>
														<option value="38">Canada</option>
														<option value="251">Canary Islands</option>
														<option value="39">Cape Verde</option>
														<option value="40">Cayman Islands</option>
														<option value="41">Central African Republic</option>
														<option value="42">Chad</option>
														<option value="43">Chile</option>
														<option value="44">China</option>
														<option value="45">Christmas Island</option>
														<option value="46">Cocos (Keeling) Islands</option>
														<option value="47">Colombia</option>
														<option value="48">Comoros</option>
														<option value="49">Congo</option>
														<option value="50">Cook Islands</option>
														<option value="51">Costa Rica</option>
														<option value="52">Cote D'Ivoire</option>
														<option value="53">Croatia</option>
														<option value="54">Cuba</option>
														<option value="246">Curacao</option>
														<option value="55">Cyprus</option>
														<option value="56">Czech Republic</option>
														<option value="237">Democratic Republic of Congo</option>
														<option value="57">Denmark</option>
														<option value="58">Djibouti</option>
														<option value="59">Dominica</option>
														<option value="60">Dominican Republic</option>
														<option value="61">East Timor</option>
														<option value="62">Ecuador</option>
														<option value="63">Egypt</option>
														<option value="64">El Salvador</option>
														<option value="65">Equatorial Guinea</option>
														<option value="66">Eritrea</option>
														<option value="67">Estonia</option>
														<option value="68">Ethiopia</option>
														<option value="69">Falkland Islands (Malvinas)</option>
														<option value="70">Faroe Islands</option>
														<option value="71">Fiji</option>
														<option value="72">Finland</option>
														<option value="74">France, Metropolitan</option>
														<option value="75">French Guiana</option>
														<option value="76">French Polynesia</option>
														<option value="77">French Southern Territories</option>
														<option value="126">FYROM</option>
														<option value="78">Gabon</option>
														<option value="79">Gambia</option>
														<option value="80">Georgia</option>
														<option value="81">Germany</option>
														<option value="82">Ghana</option>
														<option value="83">Gibraltar</option>
														<option value="84">Greece</option>
														<option value="85">Greenland</option>
														<option value="86">Grenada</option>
														<option value="87">Guadeloupe</option>
														<option value="88">Guam</option>
														<option value="89">Guatemala</option>
														<option value="256">Guernsey</option>
														<option value="90">Guinea</option>
														<option value="91">Guinea-Bissau</option>
														<option value="92">Guyana</option>
														<option value="93">Haiti</option>
														<option value="94">Heard and Mc Donald Islands</option>
														<option value="95">Honduras</option>
														<option value="96">Hong Kong</option>
														<option value="97">Hungary</option>
														<option value="98">Iceland</option>
														<option value="99">India</option>
														<option value="100">Indonesia</option>
														<option value="101">Iran (Islamic Republic of)</option>
														<option value="102">Iraq</option>
														<option value="103">Ireland</option>
														<option value="254">Isle of Man</option>
														<option value="104">Israel</option>
														<option value="105">Italy</option>
														<option value="106">Jamaica</option>
														<option value="107">Japan</option>
														<option value="257">Jersey</option>
														<option value="108">Jordan</option>
														<option value="109">Kazakhstan</option>
														<option value="110">Kenya</option>
														<option value="111">Kiribati</option>
														<option value="253">Kosovo, Republic of</option>
														<option value="114">Kuwait</option>
														<option value="115">Kyrgyzstan</option>
														<option value="116">Lao People's Democratic Republic</option>
														<option value="117">Latvia</option>
														<option value="118">Lebanon</option>
														<option value="119">Lesotho</option>
														<option value="120">Liberia</option>
														<option value="121">Libyan Arab Jamahiriya</option>
														<option value="122">Liechtenstein</option>
														<option value="123">Lithuania</option>
														<option value="124">Luxembourg</option>
														<option value="125">Macau</option>
														<option value="127">Madagascar</option>
														<option value="128">Malawi</option>
														<option value="129">Malaysia</option>
														<option value="130">Maldives</option>
														<option value="131">Mali</option>
														<option value="132">Malta</option>
														<option value="133">Marshall Islands</option>
														<option value="134">Martinique</option>
														<option value="135">Mauritania</option>
														<option value="136">Mauritius</option>
														<option value="137">Mayotte</option>
														<option value="138">Mexico</option>
														<option value="139">Micronesia, Federated States of</option>
														<option value="140">Moldova, Republic of</option>
														<option value="141">Monaco</option>
														<option value="142">Mongolia</option>
														<option value="242">Montenegro</option>
														<option value="143">Montserrat</option>
														<option value="144">Morocco</option>
														<option value="145">Mozambique</option>
														<option value="146">Myanmar</option>
														<option value="147">Namibia</option>
														<option value="148">Nauru</option>
														<option value="149">Nepal</option>
														<option value="150">Netherlands</option>
														<option value="151">Netherlands Antilles</option>
														<option value="152">New Caledonia</option>
														<option value="153">New Zealand</option>
														<option value="154">Nicaragua</option>
														<option value="155">Niger</option>
														<option value="156">Nigeria</option>
														<option value="157">Niue</option>
														<option value="158">Norfolk Island</option>
														<option value="112">North Korea</option>
														<option value="159">Northern Mariana Islands</option>
														<option value="160">Norway</option>
														<option value="161">Oman</option>
														<option value="162">Pakistan</option>
														<option value="163">Palau</option>
														<option value="247">Palestinian Territory, Occupied</option>
														<option value="164">Panama</option>
														<option value="165">Papua New Guinea</option>
														<option value="166">Paraguay</option>
														<option value="167">Peru</option>
														<option value="168">Philippines</option>
														<option value="169">Pitcairn</option>
														<option value="170">Poland</option>
														<option value="171">Portugal</option>
														<option value="172">Puerto Rico</option>
														<option value="173">Qatar</option>
														<option value="174">Reunion</option>
														<option value="175">Romania</option>
														<option value="176">Russian Federation</option>
														<option value="177">Rwanda</option>
														<option value="178">Saint Kitts and Nevis</option>
														<option value="179">Saint Lucia</option>
														<option value="180">Saint Vincent and the Grenadines</option>
														<option value="181">Samoa</option>
														<option value="182">San Marino</option>
														<option value="183">Sao Tome and Principe</option>
														<option value="184">Saudi Arabia</option>
														<option value="185">Senegal</option>
														<option value="243">Serbia</option>
														<option value="186">Seychelles</option>
														<option value="187">Sierra Leone</option>
														<option value="188">Singapore</option>
														<option value="189">Slovak Republic</option>
														<option value="190">Slovenia</option>
														<option value="191">Solomon Islands</option>
														<option value="192">Somalia</option>
														<option value="193">South Africa</option>
														<option value="194">South Georgia &amp; South Sandwich Islands</option>
														<option value="113">South Korea</option>
														<option value="248">South Sudan</option>
														<option value="195">Spain</option>
														<option value="196">Sri Lanka</option>
														<option value="249">St. Barthelemy</option>
														<option value="197">St. Helena</option>
														<option value="250">St. Martin (French part)</option>
														<option value="198">St. Pierre and Miquelon</option>
														<option value="199">Sudan</option>
														<option value="200">Suriname</option>
														<option value="201">Svalbard and Jan Mayen Islands</option>
														<option value="202">Swaziland</option>
														<option value="203">Sweden</option>
														<option value="204">Switzerland</option>
														<option value="205">Syrian Arab Republic</option>
														<option value="206">Taiwan</option>
														<option value="207">Tajikistan</option>
														<option value="208">Tanzania, United Republic of</option>
														<option value="209">Thailand</option>
														<option value="210">Togo</option>
														<option value="211">Tokelau</option>
														<option value="212">Tonga</option>
														<option value="213">Trinidad and Tobago</option>
														<option value="255">Tristan da Cunha</option>
														<option value="214">Tunisia</option>
														<option value="215">Turkey</option>
														<option value="216">Turkmenistan</option>
														<option value="217">Turks and Caicos Islands</option>
														<option value="218">Tuvalu</option>
														<option value="219">Uganda</option>
														<option value="220">Ukraine</option>
														<option value="221">United Arab Emirates</option>
														<option value="222">United Kingdom</option>
														<option value="223" selected="selected">United States</option>
														<option value="224">United States Minor Outlying Islands</option>
														<option value="225">Uruguay</option>
														<option value="226">Uzbekistan</option>
														<option value="227">Vanuatu</option>
														<option value="228">Vatican City State (Holy See)</option>
														<option value="229">Venezuela</option>
														<option value="230">Viet Nam</option>
														<option value="231">Virgin Islands (British)</option>
														<option value="232">Virgin Islands (U.S.)</option>
														<option value="233">Wallis and Futuna Islands</option>
														<option value="234">Western Sahara</option>
														<option value="235">Yemen</option>
														<option value="238">Zambia</option>
														<option value="239">Zimbabwe</option>
													</select>
												</div>
												<div class="form-group required">
													<select name="shipping_zone_id" id="input-shipping-zone" class="form-control">
														<option value=""> --- Please Select --- </option>
														<option value="3613">Alabama</option>
														<option value="3614">Alaska</option>
														<option value="3615">American Samoa</option>
														<option value="3616">Arizona</option>
														<option value="3617">Arkansas</option>
														<option value="3618">Armed Forces Africa</option>
														<option value="3619">Armed Forces Americas</option>
														<option value="3620">Armed Forces Canada</option>
														<option value="3621">Armed Forces Europe</option>
														<option value="3622">Armed Forces Middle East</option>
														<option value="3623">Armed Forces Pacific</option>
														<option value="3624">California</option>
														<option value="3625">Colorado</option>
														<option value="3626">Connecticut</option>
														<option value="3627">Delaware</option>
														<option value="3628">District of Columbia</option>
														<option value="3629">Federated States Of Micronesia</option>
														<option value="3630">Florida</option>
														<option value="3631">Georgia</option>
														<option value="3632">Guam</option>
														<option value="3633">Hawaii</option>
														<option value="3634">Idaho</option>
														<option value="3635">Illinois</option>
														<option value="3636">Indiana</option>
														<option value="3637">Iowa</option>
														<option value="3638">Kansas</option>
														<option value="3639">Kentucky</option>
														<option value="3640">Louisiana</option>
														<option value="3641">Maine</option>
														<option value="3642">Marshall Islands</option>
														<option value="3643">Maryland</option>
														<option value="3644">Massachusetts</option>
														<option value="3645">Michigan</option>
														<option value="3646">Minnesota</option>
														<option value="3647">Mississippi</option>
														<option value="3648">Missouri</option>
														<option value="3649">Montana</option>
														<option value="3650">Nebraska</option>
														<option value="3651">Nevada</option>
														<option value="3652">New Hampshire</option>
														<option value="3653">New Jersey</option>
														<option value="3654">New Mexico</option>
														<option value="3655" selected="selected">New York</option>
														<option value="3656">North Carolina</option>
														<option value="3657">North Dakota</option>
														<option value="3658">Northern Mariana Islands</option>
														<option value="3659">Ohio</option>
														<option value="3660">Oklahoma</option>
														<option value="3661">Oregon</option>
														<option value="3662">Palau</option>
														<option value="3663">Pennsylvania</option>
														<option value="3664">Puerto Rico</option>
														<option value="3665">Rhode Island</option>
														<option value="3666">South Carolina</option>
														<option value="3667">South Dakota</option>
														<option value="3668">Tennessee</option>
														<option value="3669">Texas</option>
														<option value="3670">Utah</option>
														<option value="3671">Vermont</option>
														<option value="3672">Virgin Islands</option>
														<option value="3673">Virginia</option>
														<option value="3674">Washington</option>
														<option value="3675">West Virginia</option>
														<option value="3676">Wisconsin</option>
														<option value="3677">Wyoming</option>
													</select>
												</div>
											</div>
										</form>
									</div>
								</div>
								<input type="hidden" name="default_zone_id" id="default_zone_id" value="3655">
							</fieldset>
						</div>
					</div>

					<div class="col-right col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<section class="section-left">
							<div class="ship-payment">
								<div class="checkout-content checkout-shipping-methods">
									<h2 class="secondary-title"><i class="fa fa-location-arrow"></i>Shipping Method</h2>
									<div class="box-inner">
										<p><strong>Flat Rate</strong></p>
										<div class="radio">
											<label>
												<input type="radio" name="shipping_method" value="flat.flat" checked="checked"> Flat Shipping Rate - $8.00
											</label>
										</div>
									</div>
								</div>

								<div class="checkout-content checkout-payment-methods">
									<h2 class="secondary-title"><i class="fa fa-credit-card"></i>Payment Method</h2>
									<div class="box-inner">
										<div class="radio">
											<label>
												<input type="radio" name="payment_method" value="cod" checked="checked"> Cash On Delivery

											</label>
										</div>
									</div>
								</div>

							</div>
						</section>
						<section class="section-right">
							<div id="coupon_voucher_reward">
								<div class="checkout-content coupon-voucher">
									<h2 class="secondary-title"><i class="fa fa-gift"></i>Do you Have a Coupon or Voucher?</h2>
									<div class="box-inner">
										<div class="panel-body checkout-coupon">
											<label class="col-sm-2 control-label" for="input-coupon">Enter coupon code</label>
											<div class="input-group">
												<input type="text" name="coupon" value="" placeholder="Enter coupon code" id="input-coupon" class="form-control">
												<span class="input-group-btn">
								<input type="button" value="Apply Coupon" id="button-coupon" data-loading-text="Loading..." class="btn-primary button">
							</span>
											</div>
										</div>

										<div class="panel-body checkout-voucher">
											<label class="col-sm-2 control-label" for="input-voucher">Enter voucher code</label>
											<div class="input-group">
												<input type="text" name="voucher" value="" placeholder="Enter voucher code" id="input-voucher" class="form-control">
												<span class="input-group-btn">
								<input type="button" value="Apply Voucher" id="button-voucher" data-loading-text="Loading..." class="btn-primary button">
							</span>
											</div>
										</div>

									</div>
								</div>

							</div>

							<div class="checkout-content checkout-cart">
								<h2 class="secondary-title"><i class="fa fa-shopping-cart"></i>Shopping Cart  (0.00kg) </h2>
								<div class="box-inner">
									<div class="table-responsive checkout-product">
										<table class="table table-bordered table-hover">
											<thead>
												<tr>
													<th class="text-left name" colspan="2">Product Name</th>
													<th class="text-center quantity">Quantity</th>
													<th class="text-center checkout-price">Unit Price</th>
													<th class="text-right total">Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-left name" colspan="2">
														<a href="product.html"><img src="{{asset('public/frontend/')}}/image/catalog/demo/product/travel/2-80x80.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-thumbnail"></a>
														<a href="product.html" class="product-name">Bougainvilleas on Lombard Street,  San Francisco, Tokyo</a>
													</td>
													<td class="text-left quantity">
														<div class="input-group">
															<input type="text" name="quantity[317]" value="1" size="1" class="form-control">
															<span class="input-group-btn">
																<span data-toggle="tooltip" title="" data-product-key="317" class="btn-delete" data-original-title="Remove"><i class="fa fa-trash-o"></i></span>
																<span data-toggle="tooltip" title="" data-product-key="317" class="btn-update" data-original-title="Update"><i class="fa fa-refresh"></i></span>
															</span>
														</div>
													</td>
													<td class="text-right price">$120.80</td>
													<td class="text-right total">$120.80</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="4" class="text-left">Sub-Total:</td>
													<td class="text-right">$99.00</td>
												</tr>
												<tr>
													<td colspan="4" class="text-left">Eco Tax (-2.00):</td>
													<td class="text-right">$2.00</td>
												</tr>
												<tr>
													<td colspan="4" class="text-left">VAT (20%):</td>
													<td class="text-right">$19.80</td>
												</tr>
												<tr>
													<td colspan="4" class="text-left">Total:</td>
													<td class="text-right">$120.80</td>
												</tr>
											</tfoot>
										</table>
									</div>
									<div id="payment-confirm-button" class="payment-">
										<h2 class="secondary-title"><i class="fa fa-credit-card"></i>Payment Details</h2>
										
									</div>
								</div>
							</div>

							<div class="checkout-content confirm-section">
								<div>
									<h2 class="secondary-title"><i class="fa fa-comment"></i>Add Comments About Your Order</h2>
									<label>
										<textarea name="comment" rows="8" class="form-control  requried "></textarea>
									</label>
								</div>

								<div class="checkbox check-newsletter">
									<label for="newsletter">
										<input type="checkbox" name="newsletter" value="1" id="newsletter"> I wish to subscribe to the Your Store newsletter.
									</label>
								</div>

								<div class="checkbox check-privacy">
									<label>
										<input type="checkbox" name="privacy" value="1"> I have read and agree to the <a href="#" class="agree"><b>Support 24/7 page</b></a>
									</label>
								</div>

								<div class="checkbox check-terms">
									<label>
										<input type="checkbox" name="agree" value="1"> I have read and agree to the <a href="#" class="agree"><b>Warranty And Services</b></a>
									</label>
								</div>
								<div class="confirm-order">
									<button id="so-checkout-confirm-button" data-loading-text="Loading..." class="btn btn-primary button confirm-button">Confirm Order</button>
								</div>
							</div>
						</section>
					</div>
				</div>

			</div>
		</div>
		
		
    </div>
    
    @endsection