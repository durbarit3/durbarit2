@extends('layouts.websiteapp')
@section('main_content') 
<!-- Main Container  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="container">
    <ul class="breadcrumb">
        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Account</a></li>
        <li><a href="wishlist.html">My Wish List</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-9">
            <h2>My Wish List</h2>
            <div class="table-responsive" id="wislist">
                
            </div>
            <div class="buttons clearfix">
                <div class="pull-right"><a href="#" class="btn btn-primary">Continue</a></div>
            </div>
        </div>
        <aside class="col-md-3 content-aside right_column sidebar-offcanvas">
            <span id="close-sidebar" class="fa fa-times"></span>
            <div class="module">
                <h3 class="modtitle"><span>My Wish List </span></h3>
                <div class="module-content custom-border">
                    <ul class="list-box">

                        <li><a href="#">My Account </a></li>

                        <li><a href="#">Edit Account </a></li>
                        <li><a href="#">Password </a></li>

                        <li><a href="#">Address Book </a></li>
                        <li><a href="wishlist.html">Wish List </a></li>
                        <li><a href="#">Order History </a></li>
                        <li><a href="#">Downloads </a></li>
                        <li><a href="#">Recurring payments </a></li>
                        <li><a href="#">Reward Points </a></li>
                        <li><a href="#">Returns </a></li>
                        <li><a href="#">Transactions </a></li>
                        <li><a href="#">Newsletter </a></li>

                        <li><a href="#">Logout </a></li>

                    </ul>
                </div>
            </div>
        </aside>
    </div>
</div>
<script>
    $(document).ready(function(){
        $.ajax({
            type : 'GET',
            url:"{{url('/get/wishlist')}}",
            success : function(response) {
                $( "#wislist" ).html(response);
            }

        });
    });
</script>

   <script>
    $(document).ready(function() {
       $('.delete').on('click', function(){
       var id = $(this).data('id');

        alert(id);
        
     if(id){
        $.ajax({
        url: "{{ url('/wishlist/delete/') }}/"+id,
        type:"GET",
        dataType:"json",
        processData: false,
        success: function (data) {
            // console.log(data);
              if (data ==1){
                toastr.success("wishlist delete");
                }else{
                toastr.error("wishlist delete faild");
             }
        }
     });
        } else {
               alert('danger');
        }
    });
    });
    </script>

@endsection