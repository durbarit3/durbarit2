
<footer class="footer-container typefooter-1">
    <div class="footer-has-toggle" id="collapse-footer">
        <div class="so-page-builder">
            <div class="container-fluid page-builder-ltr">
                <div class="row row_sh6r  footer--top  row-color ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_971a  float_none container">
                        <div class="row row_dmol  ">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 col_hcbx block--newletter">
                                <div class="module news-letter">
                                    <div class="so-custom-default newsletter" style="width:100%     ; background-color: #f0f0f0 ; ">
                                        <div class="btn-group title-block">
                                            <div class="popup-title page-heading">
                                                <i class="fa fa-paper-plane-o"></i> Sign up to Newsletter
                                            </div>
                                            <div class="newsletter_promo">And receive <span>$29</span>coupon for first shopping</div>
                                        </div>
                                        <div class="modcontent block_content">
                                        <form method="get" id="signup" action="{{ route('frontend.subscriber.insert') }}" class="form-group form-inline signup send-mail subscriber_form">
                                                @csrf
                                                <div class="input-group form-group required">
                                                    <div class="input-box">
                                                        <input type="text" name="subscriber_email" id="subscriber_email" placeholder="Your email address..." value="{{ old('subscriber_email') }}" class="form-control" id="txtemail"  size="55">
                                                    </div>

                                                    <div class="input-group-btn subcribe">
                                                        <button class="btn btn-primary" type="submit" name="submit">
                                                            <i class="fa fa-envelope hidden"></i>
                                                            <span>Subscribe</span>
                                                        </button>

                                                    </div>
                                                </div>

                                            </form>
                                            <span class="text-danger alert alert-danger error-msg"></span>
                                            <span class="text-success alert alert-success success-msg mt-2 d-block"></span>
                                        </div>
                                        <!--/.modcontent-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col_h1e7 block--social">
                                <div class="footer-social">
                                    <h3 class="block-title">Follow us</h3>
                                    <div class="socials">
                                        <a href="https://www.facebook.com/SmartAddons.page" class="facebook" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                            <p>on</p>
                                            <span class="name-social">Facebook</span>
                                        </a>
                                        <a href="https://twitter.com/smartaddons" class="twitter" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                            <p>on</p>
                                            <span class="name-social">Twitter</span>
                                        </a>
                                        <a href="https://plus.google.com/u/0/+SmartAddons-Joomla-Magento-WordPress/posts" class="google" target="_blank">
                                            <i class="fa fa-google-plus"></i>
                                            <p>on</p>
                                            <span class="name-social">Google +</span>
                                        </a>
                                        <a href="#" class="dribbble" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                        <a href="#" class="instagram" target="_blank">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                            <p>on</p>
                                            <span class="name-social">Instagram</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid page-builder-ltr">
                <div class="row row_z1do  footer--center  row-color ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_x6fe  float_none container">
                        <div class="row row_wprs  ">


                            @foreach(App\SubCategory::where('is_deleted',0)->get() as $subcategores)
                            <div class="col-lg-15 col-md-15 col-sm-4 col-xs-6 col_yb5e footer--link">
                                <h3 class="title-footer">
                                    <a href="{{url('subacete/'.$subcategores->category->cate_slug.'/'.$subcategores->subcate_slug)}}">
                                    {{$subcategores->subcate_name}}
                                    </a>
                                </h3>
                                <ul class="links">
                                    @foreach(App\ReSubCategory::where('subcate_id',$subcategores->id)->where('is_deleted',0)->get() as $resubcategores)
                                        <li>
                                            <a href="{{url('resubacete/'.$resubcategores->category->cate_slug.'/'.$resubcategores->subcate->subcate_slug.'/'.$resubcategores->resubcate_slug)}}">{{$resubcategores->resubcate_name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                        
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid page-builder-ltr">
                <div class="row row_qof8  footer--center3  row-color ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_up4v  float_none ">
                        <div class="row row_fymn  ">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_1yf0">
                                <div class="contactinfo">
                                    
                                        
                                        <h4 class="title-footer" style="background: url({{asset(App\Logo::first()->front_logo)}}) no-repeat center">Our Contact</h4>
                                    

                                    @php
                                        $footeroption = App\FooterOption::findOrFail(11); 
                                    @endphp
                                    <p>They key is to have every key, the key to open every door. We will never see them</p>
                                    <div class="content-footer">
                                        <div class="address">
                                            <label><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                                            <span>{{$footeroption->address}}</span>
                                        </div>
                                        <div class="phone">
                                            <label><i class="fa fa-phone" aria-hidden="true"></i></label>
                                            <span>{{$footeroption->phone}}</span>
                                        </div>
                                        <div class="email">
                                            <label><i class="fa fa-envelope"></i></label>
                                            <a href="#">{{$footeroption->email}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-html">
                                    <div>
                                        <a class="app-1" href="#">google store</a>
                                        <a class="app-2" href="#">apple store</a>
                                        <a class="app-3" href="#">window store</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-toggle hidden-lg hidden-md">
        <a class="showmore collapsed" data-toggle="collapse" href="#collapse-footer" aria-expanded="false" aria-controls="collapse-footer">
            <span class="toggle-more"><i class="fa fa-angle-double-down"></i>Show More</span>
            <span class="toggle-less"><i class="fa fa-angle-double-up"></i>Show less</span>
        </a>
    </div>
    <div class="footer-bottom ">
        <div class="container">
            <div class="row">
                <div class="col-md-7  col-sm-7 copyright">
                {{$footeroption->copyright}}
                </div>
                <div class="col-md-5 col-sm-5 paymen">
                    <img src="{{asset('public/uploads/footerpayment/')}}/{{$footeroption->payment_image}}" alt="imgpayment">
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- //end Footer Container -->

<script type="text/javascript" src="{{asset('public/frontend/js/jquery-2.2.4.min.js')}}"></script>


<script>
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

    $('.success-msg').hide();
    $('.error-msg').hide();
    $(document).ready(function(){
        $('.subscriber_form').on('submit', function(e){
            e.preventDefault();
            var subscriber_email = $('#subscriber_email').val();
            var url = $(this).attr('action');
            var method = $(this).attr('method');
            var data = $(this).serialize();
            var method = $(this).attr('method');
            $.ajax({
                url:url,
                type:'get',
                data:{
                    subscriber_email:subscriber_email
                },
                dataType:'json',
                success:function (data) {
                    if (data) {
                        $('.success-msg').hide(100);
                        $('.success-msg').show(100);
                        $('.error-msg').hide();
                        $('.success-msg').text(data.successMsg)
                        $('#subscriber_email').val('');
                    }
                },
                error:function(err){
                    //console.log(err.responseJSON.errors.subscriber_email);
                    $('.error-msg').hide(100);
                    $('.error-msg').show(100);
                    $('.error-msg').text(err.responseJSON.errors.subscriber_email);
                    $('.success-msg').hide();

                }
            });
        })
    });
</script>
