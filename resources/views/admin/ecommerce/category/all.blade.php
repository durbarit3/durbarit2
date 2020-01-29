@extends('layouts.adminapp')
@section('admin_content')  
            <!-- content wrpper -->
			<div class="content_wrapper">
				<!--middle content wrapper-->
				<!-- page content -->
				<div class="middle_content_wrapper">
					<section class="page_content">
						<!-- panel -->
						<div class="panel mb-0">
							<div class="panel_header">
								<div class="row">
									<div class="col-md-6">
										<div class="panel_title">
											<span class="panel_icon"><i class="fas fa-border-all"></i></span><span>All Category</span>
										</div>
									</div>
									<div class="col-md-6 text-right">
										<div class="panel_title">
											<a href="{{route('admin.category.add')}}" class="btn btn-success"><i class="fas fa-plus"></i></span> <span>Add Category</span></a>
										</div>
									</div>
								</div>
								
							</div>
							<form action="{{url('admin/category/multiplesoftdelete')}}" method="Post">
						     @csrf
							<button type="submit" style="margin: 5px;" class="btn btn-danger" ><i class="fa fa-trash"></i> Delete All</button>
             				<button type="button"  style="margin: 5px;" class="btn btn-success" ><i class="fas fa-recycle"></i> <a href="{{route('admin.trash.category')}}" style="color: #fff;">Restore</a></button>
							<div class="panel_body">
								<div class="table-responsive">
		                         <table id="dataTableExample1" class="table table-bordered table-striped table-hover mb-2">
		                              <thead>
		                                  <tr>
		                                      <th>
												<label class="chech_container mb-4">
													<input type="checkbox"  id="check_all">
													<span class="checkmark"></span>
												</label>
		                                      </th>
		                                      <th>Category Name</th>
		                                      <th>Category Icon</th>
		                                      <th>Category Image</th>
		                                      <th>Category Tag</th>
		                                      <th>Status</th>
		                                      <th>manage</th>
		                                  </tr>
		                              </thead>
		                              <tbody>
		                              	@foreach($allcategory as $data)
		                                  <tr>
	                                  		  <td>
												<label class="chech_container mb-4">
													<input type="checkbox" name="delid[]" class="checkbox" value="{{$data->id}}">
													<span class="checkmark"></span>
												</label>
		                                      </td>
		                                      <td>{{$data->cate_name}}</td>
		                                      <td>
		                                      	<img src="{{asset('public/uploads/category/'.$data->cate_icon)}}" height="45px;">
		                                      </td>
		                                      <td>
		                                      	<img src="{{asset('public/uploads/category/'.$data->cate_image)}}" height="45px;">
		                                      </td>
		                                      <td>{{$data->cate_tag}}</td>
								              @if($data->cate_status==1)
					                          <td class="center"><span class="btn-success">Active</span></td>
					                          @else
					                          <td class="center"><span class="btn-danger">Deactive</span></td>
						                      @endif
		                                       <td>
		                                       		@if($data->cate_status==1)
		                                           	<a  href="{{url('admin/category/deactive/'.$data->id)}}" class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-placement="right" title="active" data-original-title="active"><i class="far fa-thumbs-up"></i></a>
													@else
													<a  href="{{url('admin/category/active/'.$data->id)}}" class="btn btn-default btn-sm text-white" data-toggle="tooltip" data-placement="right" title="active" data-original-title="Deactive"><i class="far fa-thumbs-down"></i></a>
													@endif

		                                           	| <a class="editcat btn btn-sm btn-blue text-white" data-id="{{$data->id}}" title="edit"  data-toggle="modal" data-target="#editModal"><i class="fas fa-pencil-alt"></i></a> |
		                                            <a id="delete" href="{{url('admin/category/softdelete/'.$data->id)}}" class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-placement="right" title="Delete" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
		                                       </td>
		                                  </tr>
		                                 @endforeach
		                              </tbody>
		                          </table>
		                      </div>
							</div>
						  </form>
						</div>
					</section>
				</div>
			</div>
<!-- modal start-->
  <!-- The Modal -->
  <div class="modal fade bd-example-modal-lg" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Category</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form class="form-horizontal" action="{{route('admin.category.insert')}}" method="POST" enctype="multipart/form-data" >

          	@csrf
			 <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Name:</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="cate_name" required>
			    </div>
			  </div>
			  <div class="form-group row">
                <label for="example-text-input" class="col-sm-3 col-form-label text-right">Slug</label>
                <div class="col-sm-8">
                   <input class="form-control" type="text" name="cate_slug">
                   <p style="font-size: 11px">(If you leave it blank, it will be generated automatically)</p>
                </div>
               </div>

               
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Top Image:</label>
			    <div class="col-sm-8">
			      <input type="file" name="top_image">
			  		 <p>(1170px*220px)</p>
			    </div>
			  </div>
			


			   <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Image:</label>
			    <div class="col-sm-8">
			      <input type="file" name="pic" required>
			  		 <p>(270px*270px)</p>
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Icon:</label>

			    <div class="col-sm-8">
			      <input type="file" name="icon" required>
			      <p>(20px*20px)</p>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Choich Section</label>
			    <div class="col-sm-8 row">
			     <div class="col-md-8">
			     	<input type="radio" name="section_id" value="1">
			     	<img src="{{asset('public/adminpanel')}}/Capture.PNG" alt="asif" height="70px" width="150px">
			     </div>
			     <br>
			     <br>
			     <br>
			     <div class="col-md-8">
			     	<input type="radio" name="section_id" value="2">
			     	<img src="{{asset('public/adminpanel')}}/Capture2.PNG" alt="asif" height="70px" width="150px">
			     </div>
			     <br>
			     <br>
			     <br>  
			     <div class="col-md-8">
			     	<input type="radio" name="section_id" value="3">
			     	<img src="{{asset('public/adminpanel')}}/Capture3.PNG" alt="asif" height="70px" width="150px">
			     </div>
			     <br>
			     <br>
			     <br>  
			     <div class="col-md-8">
			     	<input type="radio" name="section_id" value="4">
			     	<img src="{{asset('public/adminpanel')}}/Capture4.PNG" alt="asif" height="70px" width="150px">
			     </div>
			     <div class="col-md-8">
			     	<input type="radio" name="section_id" value="5" checked>
			     	<img src="{{asset('public/adminpanel')}}/Capture5.PNG" alt="asif" height="70px" width="150px">
			     </div>
			     <br>
			     <br>
			     <br>
			    </div>
			  </div>

			 
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Meta Tag:</label>
			    <div class="col-sm-8">

			      <input type="text" name="tag" class="form-control">

			      
			    </div>
			  </div>
		    <div class="form-group text-right">
		    	<input type="reset" value="Reset" class="btn btn-warning">
		    	<button type="submit" class="btn btn-blue">Submit</button>
		    </div>
		  </form>
        </div>
        
        <!-- Modal footer -->
       <!--  <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->
        
      </div>
    </div>
  </div>
<!-- modal end -->

<!-- edit modal -->

<!-- edit modal start-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data" >

          	@csrf
			 <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Name:</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="cate_name" id="cate_name" required>
			      <input type="hidden" name="id" id="id">
			    </div>
			  </div>
			  <div class="form-group row">
                <label for="example-text-input" class="col-sm-3 col-form-label text-right">Slug</label>
                <div class="col-sm-8">
                   <input class="form-control" type="text" name="cate_slug" id="cate_slug">
                   <p style="font-size: 11px">(If you leave it blank, it will be generated automatically)</p>
                </div>
               </div>

			   <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Image:</label>
			    <div class="col-sm-4">
			      <input type="file" name="pic">
			      <p>(120px*120px)</p>
			    </div>
			    <div class="col-sm-4" id="store-img">
			      
			    </div>
			  </div>
			  <div class="form-group row">
			    
			    <div class="col-sm-3">
			 
			    </div>
			    <div class="col-sm-4" id="img">
			      
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Icon:</label>

			    <div class="col-sm-6">
			      <input type="file" name="icon">
			      <p style="margin-bottom: -10px">(32px*32px)</p>

			    </div>
			    <div class="col-sm-3" id="store-icon">
			    	
			    </div>
			  </div>

			  <div class="form-group row">
			    <div class="col-sm-3">
		
			    </div>
			    <div class="col-sm-4" id="icon">
		
			    </div>
			  </div>
			    <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Choich Section</label>
			    <div class="col-sm-8 row" id="section_id1">
				    
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label text-right">Meta Tag:</label>
			    <div class="col-sm-8">
			      <input type="text" name="tag" id="cate_tag_edit" class="form-control cate_tag_edit"> 
			    </div>
			  </div>
		    <div class="form-group text-right">
		    	<!-- <input type="" value="Reset" class="btn btn-warning"> -->
		    	<button type="button" class="btn btn-default" data-dismiss="modal" aria-label=""> Close</button>
		    	<button type="submit" class="btn btn-blue">Submit</button>
		    </div>
		  </form>
      </div>
    </div>
  </div>
</div>

<!-- edit modal end -->
<script type="text/javascript">

    $(document).ready(function () {

        $('#check_all').on('click', function(e) {

         if($(this).is(':checked',true))  

         {
            $(".checkbox").prop('checked', true);  

         } else {  

            $(".checkbox").prop('checked',false);  

         }  

        });

    });

</script>
<script type="text/javascript">
  
      $(document).ready(function() {
         $('.editcat').on('click', function(){
             var cate_id = $(this).data('id');
     		
             if(cate_id) {
                 $.ajax({
                     url: "{{ url('/get/category/edit/') }}/"+cate_id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                      
                            $("#cate_name").val(data.cate_name);
                            $("#id").val(data.id);

                            $("#cate_slug").val(data.cate_slug);
                            $("#cate_tag_edit").val(data.cate_tag);
                           



                            $("#old_header_image").append("<input type='hidden' name='old_header_image' value='"+data.header_image+"' />");
                            $("#store_header_image").html("<img src={{asset('')}}public/uploads/category/"+data.header_image+" height='70px' width='150px'/>");

                            $("#old_top_image").append("<input type='hidden' name='old_top_image' value='"+data.top_image+"' />");
                            $("#store_top_image").html("<img src={{asset('')}}public/uploads/category/"+data.top_image+" height='70px' width='150px'/>");

                            $("#old_side_image").append("<input type='hidden' name='old_side_image' value='"+data.side_image+"' />");
                            $("#store_side_image").html("<img src={{asset('')}}public/uploads/category/"+data.side_image+" height='70px' width='150px'/>");




                            $("#img").html("<img src={{asset('')}}public/uploads/category/"+data.cate_image+" height='70px'/>");
                            $("#store-img").append("<input type='hidden' name='old_image' value='"+data.cate_image+"' />");
                            $("#icon").html("<img src={{asset('')}}public/uploads/category/"+data.cate_icon+" height='70px'/>");
                            $("#store-icon").append("<input type='hidden' name='old_icon' value='"+data.cate_icon+"' />");

                            if(data.section_id === 1){
                            	$("#section_id1").append("<div class='col-md-8'><input type='radio' name='section_id' value='1' checked><img src='{{asset('public/adminpanel')}}/Capture.PNG' alt='asif' height='70px' width='100px'</div><br><br><br><div class='col-md-8'><input type='radio' name='section_id' value='2'><img src='{{asset('public/adminpanel')}}/Capture2.PNG' alt='asif' height='70px' width='100px'></div><br><br><br><div class='col-md-8'><input type='radio' name='section_id' value='3'><img src='{{asset('public/adminpanel')}}/Capture3.PNG' alt='asif' height='70px' width='100px'></div><br><br><br><div class='col-md-8'><input type='radio' name='section_id' value='4'><img src='{{asset('public/adminpanel')}}/Capture4.PNG' alt='asif' height='70px' width='100px'></div><div class='col-md-8'><input type='radio' name='section_id' value='5'><img src='{{asset('public/adminpanel')}}/Capture5.PNG' alt='asif' height='70px' width='100px'></div><br><br><br>");



                            }else if(data.section_id === 2){
                            	$("#section_id1").append("<div class='col-md-8'><input type='radio' name='section_id' value='1'><img src='{{asset('public/adminpanel')}}/Capture.PNG' alt='asif' height='70px' width='100px'</div><br><br><br><div class='col-md-8'><input type='radio' name='section_id' value='2' checked><img src='{{asset('public/adminpanel')}}/Capture2.PNG' alt='asif' height='70px' width='100px'></div><br><br><br><div class='col-md-8'><input type='radio' name='section_id' value='3'><img src='{{asset('public/adminpanel')}}/Capture3.PNG' alt='asif' height='70px' width='100px'></div><br><br><br><div class='col-md-8'><input type='radio' name='section_id' value='4'><img src='{{asset('public/adminpanel')}}/Capture4.PNG' alt='asif' height='70px' width='100px'></div><div class='col-md-8'><input type='radio' name='section_id' value='5'><img src='{{asset('public/adminpanel')}}/Capture5.PNG' alt='asif' height='70px' width='100px'></div><br><br><br>");
                            }
                            else if(data.section_id === 3){
                            	$("#section_id1").append("<div class='col-md-8'><input type='radio' name='section_id' value='1'><img src='{{asset('public/adminpanel')}}/Capture.PNG' alt='asif' height='70px' width='100px'</div><br><br><br><div class='col-md-8'><input type='radio' name='section_id' value='2'><img src='{{asset('public/adminpanel')}}/Capture2.PNG' alt='asif' height='70px' width='100px'></div><br><br><br><div class='col-md-8'><input type='radio' name='section_id' value='3' checked><img src='{{asset('public/adminpanel')}}/Capture3.PNG' alt='asif' height='70px' width='100px'></div><br><br><br><div class='col-md-8'><input type='radio' name='section_id' value='4'><img src='{{asset('public/adminpanel')}}/Capture4.PNG' alt='asif' height='70px' width='100px'></div><div class='col-md-8'><input type='radio' name='section_id' value='5'><img src='{{asset('public/adminpanel')}}/Capture5.PNG' alt='asif' height='70px' width='100px'></div><br><br><br>");
                            }
                            else if(data.section_id === 4){
                            	$("#section_id1").append("<div class='col-md-8'><input type='radio' name='section_id' value='1'><img src='{{asset('public/adminpanel')}}/Capture.PNG' alt='asif' height='70px' width='100px'</div><br><br><br><div class='col-md-8'><input type='radio' name='section_id' value='2'><img src='{{asset('public/adminpanel')}}/Capture2.PNG' alt='asif' height='70px' width='100px'></div><br><br><br><div class='col-md-8'><input type='radio' name='section_id' value='3'><img src='{{asset('public/adminpanel')}}/Capture3.PNG' alt='asif' height='70px' width='100px'></div><br><br><br><div class='col-md-8'><input type='radio' name='section_id' value='4' checked><img src='{{asset('public/adminpanel')}}/Capture4.PNG' alt='asif' height='70px' width='100px'></div><div class='col-md-8'><input type='radio' name='section_id' value='5'><img src='{{asset('public/adminpanel')}}/Capture5.PNG' alt='asif' height='70px' width='100px'></div><br><br><br>");
                            }
                            else if(data.section_id === 5){
                            	$("#section_id1").append("<div class='col-md-8'><input type='radio' name='section_id' value='1'><img src='{{asset('public/adminpanel')}}/Capture.PNG' alt='asif' height='70px' width='100px'</div><br><br><br><div class='col-md-8'><input type='radio' name='section_id' value='2'><img src='{{asset('public/adminpanel')}}/Capture2.PNG' alt='asif' height='70px' width='100px'></div><br><br><br><div class='col-md-8'><input type='radio' name='section_id' value='3'><img src='{{asset('public/adminpanel')}}/Capture3.PNG' alt='asif' height='70px' width='100px'></div><br><br><br><div class='col-md-8'><input type='radio' name='section_id' value='4'><img src='{{asset('public/adminpanel')}}/Capture4.PNG' alt='asif' height='70px' width='100px'></div><div class='col-md-8'><input type='radio' name='section_id' value='5' checked><img src='{{asset('public/adminpanel')}}/Capture5.PNG' alt='asif' height='70px' width='100px'></div><br><br><br>");
                            }
                            else{
                            	
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