@extends('layouts.websiteapp')
@section('main_content')
<!-- Main Container  -->
<div class="main-container container account res">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Account</a></li>
        <li><a href="#">Register</a></li>
    </ul>

    <div class="row">
        <div id="content" class="col-md-9">
            <h2 class="title">Register Account</h2>
            <p>If you already have an account with us, please login at the <a href="#">login page</a>.</p>
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
                <fieldset id="account">
                    <legend>Your Personal Details</legend>
                    <div class="form-group required" style="display: none;">
                        <label class="col-sm-2 control-label">Customer Group</label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="customer_group_id" value="1" checked="checked"> Default
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
                        <div class="col-sm-10">
                            <input type="tel" name="telephone" value="" placeholder="Telephone" id="input-telephone" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-fax">Fax</label>
                        <div class="col-sm-10">
                            <input type="text" name="fax" value="" placeholder="Fax" id="input-fax" class="form-control">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Your Password</legend>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-password">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
                        <div class="col-sm-10">
                            <input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Newsletter</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Subscribe</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" name="newsletter" value="1"> Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="newsletter" value="0" checked="checked"> No
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="buttons">
                    <div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Pricing Tables</b></a>
                        <input class="box-checkbox" type="checkbox" name="agree" value="1"> &nbsp;
                        <input type="submit" value="Continue" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
            <span id="close-sidebar" class="fa fa-times"></span>
            <div class="module">
                <h3 class="modtitle"><span>Register Account </span></h3>
                <div class="module-content custom-border">
                    <ul class="list-box">

                        <li><a href="login.html">Login </a> / <a href="register.html">Register </a></li>
                        <li><a href="#">Forgotten Password </a></li>

                        <li><a href="#">My Account </a></li>

                        <li><a href="#">Address Book </a></li>
                        <li><a href="wishlist.html">Wish List </a></li>
                        <li><a href="#">Order History </a></li>
                        <li><a href="#">Downloads </a></li>
                        <li><a href="#">Recurring payments </a></li>
                        <li><a href="#">Reward Points </a></li>
                        <li><a href="#">Returns </a></li>
                        <li><a href="#">Transactions </a></li>
                        <li><a href="#">Newsletter </a></li>

                    </ul>
                </div>
            </div>
        </aside>
    </div>
</div>
<!-- //Main Container -->
@endsection