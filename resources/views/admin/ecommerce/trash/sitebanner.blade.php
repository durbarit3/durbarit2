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
											<span class="panel_icon"><i class="fas fa-border-all"></i></span><span>All Deleted Site-Banner</span>
										</div>
									</div>
								</div>
								
							</div>
							<form action="{{route('admin.trash.sitebannerdel')}}" method="Post">
						     @csrf

							<button type="submit" style="margin: 5px;" name="submit" class="btn btn-danger" value="delete" ><i class="fa fa-trash"></i> Delete All</button>
				            <button type="submit" style="margin: 5px;" name="submit" class="btn btn-success" value="restore" ><i class="fas fa-trash-restore-alt"></i> Restore All</button>
				            <button type="button"  style="margin: 5px;" class="btn btn-info" ><i class="fas fa-undo"></i> <a href="{{route('admin.sitebanner.all')}}" style="color: #fff;">Back</a></button>

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
		                                      <th>#</th>
		                                      <th>Banner Link</th>
		                                      <th>Banner Image</th>
		                                     
		                                      <th>manage</th>
		                                  </tr>
		                              </thead>
		                              <tbody>
		                              	@foreach($siteban as $key => $data)
		                                  <tr>
	                                  		  <td>
												<label class="chech_container mb-4">
													<input type="checkbox" name="delid[]" class="checkbox" value="{{$data->id}}">
													<span class="checkmark"></span>
												</label>
		                                      </td>
		                                      <td>
		                                      	@if($data->section==1)
		                                      	Ban(435*175)
		                                      	@elseif($data->section==2)
		                                      	Ban(570*300)
		                                      	@elseif($data->section==3)
		                                      	Ban(270*854)
		                                      	@elseif($data->section==4)
		                                      	Ban(270*427)
		                                      	@elseif($data->section==5)
		                                      	Ban(362*495)
		                                      	@elseif($data->section==6)
		                                      	Ban(1920*180)
		                                      	@endif
		                                      </td>
		                                      <td>{{Str::limit($data->link,25)}}</td>
		                                      
		                                      <td> 
		                                      	<img src="{{asset('public/uploads/banner/sitebanner/'.$data->image)}}" height="45px" width="45px">
		                                      </td>
		                                     
		                                       <td>
		                                       		<a  href="{{url('admin/sitebanner/restore/'.$data->id)}}" class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-placement="right" title="active" data-original-title="active"><i class="fas fa-recycle"></i></a>

		                                           	|<a id="delete" href="{{url('admin/sitebanner/hearddelete/'.$data->id)}}" class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-placement="right" title="Delete" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
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
<!-- edit modal start-->


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

@endsection