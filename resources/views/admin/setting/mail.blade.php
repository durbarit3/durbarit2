@extends('layouts.adminapp')
@section('admin_content')
 <div class="content_wrapper">
      <div class="middle_content_wrapper">
	<section class="page_area">
	     <div class="row">     						
		<div class="col-lg-6">
		     <div class="panel">
			<div class="panel_header">
			     <div class="panel_title"><span class="text-center">SMTP Setting</span></div>
			</div>
			    <div class="panel_body">
	                                   <form class="py-2" action="{{ route('admin.smtp.update') }}" method="post"  >
	                                   	@csrf
	                                         <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">Driver</label>
	                                             <div class="col-sm-7">
	                                                 <input class="form-control" type="text"   name="driver" required="" value="{{ $smtp->driver }}">
	                                             </div>
	                                         </div>
	                                         <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">Host</label>
	                                             <div class="col-sm-7">
	                                                 <input class="form-control" type="text"   name="host" required="" value="{{ $smtp->host }}">
	                                             </div>
	                                         </div>
	                                         <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">Port</label>
	                                             <div class="col-sm-7">
	                                                 <input class="form-control" type="text"   name="port" required="" value="{{ $smtp->port }}">
	                                             </div>
	                                         </div>
	                                         <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">From Email</label>
	                                             <div class="col-sm-7">
	                                                 <input class="form-control" type="text"   name="from_address" required="" value="{{ $smtp->from_address }}">
	                                             </div>
	                                         </div>
	                                         <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">From Name</label>
	                                             <div class="col-sm-7">
	                                                 <input class="form-control" type="text"   name="from_name" required="" value="{{ $smtp->from_name }}">
	                                             </div>
	                                         </div>
	                                         <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">Encryption</label>
	                                             <div class="col-sm-7">
	                                                 <input class="form-control" type="text"   name="encryption" required="" value="{{ $smtp->encryption }}">
	                                             </div>
	                                         </div>
	                                         <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">User Name</label>
	                                             <div class="col-sm-7">
	                                                 <input class="form-control" type="text"   name="username" required="" value="{{ $smtp->username }}">
	                                             </div>
	                                         </div>
	                                         <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">Password</label>
	                                             <div class="col-sm-7">
	                                                 <input class="form-control" type="text"   name="password" required="" value="{{ $smtp->password }}">
	                                             </div>
	                                         </div>
	                                       <input type="hidden" name="id" value="{{ $smtp->id }}">
	                                      	<br>
	                                      	<div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label"></label>
	                                             <div class="col-sm-6">
	                                                 <button type="submit" class="btn btn-success">Update</button>   
	                                             </div>
	                                        </div>
	                                    </form>
			  </div>
		       </div>
		</div>
	         <div class="col-lg-6">
		     <div class="panel">
			<div class="panel_header">
			     <div class="panel_title"><span class="text-center">Mailgun Setting </span></div>
			</div>
			    <div class="panel_body">
	                                   <form class="py-2" action="{{ route('admin.mailgun.update') }}" method="post"  >
	                                   	@csrf
				<div class="form-group row">
				    <label for="example-text-input" class="col-sm-3 col-form-label">Mailgun Domain</label>
				    <div class="col-sm-9">
				        <input class="form-control" type="text" value="{{ $smtp->mailgun_domain }}"  required="" name="mailgun_domain">
				    </div>
				</div>
				<div class="form-group row">
				    <label for="example-text-input" class="col-sm-3 col-form-label">Mailgun Secret </label>
				    <div class="col-sm-9">
				        <input class="form-control" type="text" value="{{ $smtp->mailgun_secret }}"  name="mailgun_secret">
				    </div>
				</div>
				<div class="form-group row">
				    <label for="example-text-input" class="col-sm-3 col-form-label">Mailgun Endpoint </label>
				    <div class="col-sm-9">
				        <input class="form-control" type="text" value="{{ $smtp->mailgun_endpoint }}"  name="mailgun_endpoint">
				    </div>
				</div>
	                                       <input type="hidden" name="id" value="{{ $smtp->id }}">
	                                      	<br>
	                                      	<div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label"></label>
	                                             <div class="col-sm-6">
	                                                 <button type="submit" class="btn btn-success">Update</button>   
	                                             </div>
	                                         </div>
	                                     </form>
			  </div>
		       </div>
		</div>
	     </div>
	</section>			
      </div>
</div>
@endsection