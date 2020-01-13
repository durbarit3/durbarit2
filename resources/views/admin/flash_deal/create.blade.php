@extends('layouts.adminapp')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/adminpanel')}}/assets/plugins/select2/css/select2.min.css">
      <!-- content wrpper -->
			<div class="content_wrapper">
				<!--middle content wrapper-->
				<div class="middle_content_wrapper">

				<section class="page_area">
					<div class="panel">
						<div class="panel_header">
							<div class="row">
								<div class="col-md-6">
                                    <div class="panel_title">
                                        <span class="panel_icon"><i class="fas fa-plus-square"></i></span><span>Add Flash Deal</span>
                                    </div>
								</div>
								<div class="col-md-6 text-right">
									<button type="button"  style="margin: 5px;" class="btn btn-success" ><i class="fas fa-award"></i> <a href="" style="color: #fff;">All Flash Deal</a></button>
								</div>
							</div>

						</div>
						<div class="panel_body">
							<form action="{{route('admin.flash.deal.insert')}}" method="POST" id="choice_form" enctype="multipart/form-data">
								@csrf
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label text-right">Title</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label text-right">Start Date</label>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" name="start_date">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label text-right">End Date</label>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" name="end_date">
                                    </div>
                                </div>

								<!--  -->

                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label text-right">Product</label>
                                    <div class="col-sm-6">
                                        <div class="select2-purple">
                                            <select class="select2" name="product_id[]" id="product_id" multiple="multiple" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                                @foreach($products as $product)
                                                <option value="{{$product->id}}">{{$product->product_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- selected product section -->
                                <div class="row justify-content-center">
                                    <div class="col-md-6 ">
                                        <div class="selected-products-table">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>Product Name</th>
                                                        <th>Base Price</th>
                                                        <th>Discount</th>
                                                        <th>Type</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Product Name</td>
                                                        <td>1000</td>
                                                        <td><input type="number" name="discount_amount[]"></td>
                                                        <td>
                                                            <select name="discount_type[]" id="">
                                                                <option value="amount">Amount</option>
                                                                <option value="persentage">Persentage</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

							</form>

						</div>
					</div>
				</section>
			</div><!--/middle content wrapper-->
			</div><!--/ content wrapper -->
   <!-- script code start -->
 <script>

 </script>


<script type="text/javascript">

    // $(document).ready(function() {
    //     $('select[name="cupon_type"]').on('change', function(){
    //         var cupon_id = $(this).val();

    //         if(cupon_id==1){
    //             $("#fortotalorder").show();
    //             $("#forproduct").hide();
    //         }
    //         else if(cupon_id==2){
    //             $("#forproduct").show();
    //             $("#fortotalorder").hide();
    //         }else{
    //             $("#forproduct").hide();
    //             $("#fortotalorder").hide();
    //         }
    //     });
    // });


    $(document).ready(function(){
        $('.selected-products-table').hide();
        $(document).on('change','#product_id', function(){
           var value = $(this).val();
           if (value == null) {
                $('.selected-products-table').hide();
           }else{
            $('.selected-products-table').show();
           }
           console.log(value);

        });
    })

</script>

 <script>
//  $(document).ready(function() {
// 	$("#allow_product_condition").click(function() {
// 		if ($(this).is(":checked")) {
// 			$("#product_condition").show();
// 		}
// 		else {
// 			$("#product_condition").hide();
// 			}
// 	});
// 	$("#allow_product_measurement").click(function() {
// 		if ($(this).is(":checked")) {
// 			$("#product_measurement").show();
// 		}
// 		else {
// 			$("#product_measurement").hide();
// 			}
// 	});
// 	$("#allow_flash_deal").click(function() {
// 		if ($(this).is(":checked")){
// 			$("#flash_deal_section").show();
// 		}
// 		else {
// 			$("#flash_deal_section").hide();
// 			}
// 	});
// });
</script>


<script src="{{asset('public/adminpanel')}}/assets/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript">
  $(function(){

   $('.select2').select2()

 });
</script>

@endsection
