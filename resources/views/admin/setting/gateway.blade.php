@extends('layouts.adminapp')
@section('admin_content')
 <div class="content_wrapper">
      <div class="middle_content_wrapper">
	<section class="page_area">
	     <div class="row">     						
		<div class="col-lg-6">
		     <div class="panel">
			<div class="panel_header">
			     <div class="panel_title"><span class="text-center">Stripe Gatwway</span></div>
			</div>
			    <div class="panel_body">
	                                   <form class="py-2" action="{{ route('admin.stripe.update') }}" method="post">
	                                   	@csrf
	                                         <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">Publish Key</label>
	                                             <div class="col-sm-7">
	                                                 <input class="form-control" type="text"   name="str_publish_key" required="" value="{{ $payment->str_publish_key }}">
	                                             </div>
	                                         </div>
	                                         <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">Secret Key</label>
	                                             <div class="col-sm-7">
	                                                 <input class="form-control" type="text"   name="str_secret_key" required="" value="{{ $payment->str_secret_key }}">
	                                             </div>
	                                         </div>
	                                       <input type="hidden" name="id" value="{{ $payment->id }}">
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
			     <div class="panel_title"><span class="text-center">Paypal Gateway </span></div>
			</div>
			    <div class="panel_body">
	                                   <form class="py-2" action="{{ route('admin.paypal.update') }}" method="post"  >
	                                   	@csrf
				<div class="form-group row">
				    <label for="example-text-input" class="col-sm-3 col-form-label">Client ID</label>
				    <div class="col-sm-9">
				        <input class="form-control" type="text" value="{{ $payment->pay_client_id }}"  required="" name="pay_client_id">
				    </div>
				</div>
				<div class="form-group row">
				    <label for="example-text-input" class="col-sm-3 col-form-label"> Secret ID</label>
				    <div class="col-sm-9">
				        <input class="form-control" type="text" value="{{ $payment->pay_secret_key }}"  name="pay_secret_key">
				    </div>
				</div>
	                                       <input type="hidden" name="id" value="{{ $payment->id }}">
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
	          <div class="row">     						
	     	<div class="col-lg-6">
	     	     <div class="panel">
	     		<div class="panel_header">
	     		     <div class="panel_title"><span class="text-center">2Checkout Payment Gatwway</span></div>
	     		</div>
	     		    <div class="panel_body">
	                                        <form class="py-2" action="{{ route('admin.twocheckout.update') }}" method="post"  >
	                                        	@csrf
	                                              <div class="form-group row">
	                                                  <label for="example-text-input" class="col-sm-3 col-form-label">Publish Key</label>
	                                                  <div class="col-sm-7">
	                                                      <input class="form-control" type="text"   name="twocheck_publish_key" required="" value="{{ $payment->twocheck_publish_key }}">
	                                                  </div>
	                                              </div>
	                                              <div class="form-group row">
	                                                  <label for="example-text-input" class="col-sm-3 col-form-label">Secret Key</label>
	                                                  <div class="col-sm-7">
	                                                      <input class="form-control" type="text"   name="twocheck_secret_key" required="" value="{{ $payment->twocheck_secret_key }}">
	                                                  </div>
	                                              </div>
	                                            <input type="hidden" name="id" value="{{ $payment->id }}">
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
	     		     <div class="panel_title"><span class="text-center">Mollie Payment Gateway </span></div>
	     		</div>
	     		    <div class="panel_body">
	                                        <form class="py-2" action="{{ route('admin.mollie.update') }}" method="post"  >
	                                        	@csrf
	     			<div class="form-group row">
	     			    <label for="example-text-input" class="col-sm-3 col-form-label">Secret Key</label>
	     			    <div class="col-sm-9">
	     			        <input class="form-control" type="text" value="{{ $payment->mol_secret_key }}"  required="" name="mol_secret_key">
	     			    </div>
	     			</div>
	     			<div class="form-group row">
	     			    <label for="example-text-input" class="col-sm-3 col-form-label"> Publish Key</label>
	     			    <div class="col-sm-9">
	     			        <input class="form-control" type="text" value="{{ $payment->mol_publish_key }}"  name="mol_publish_key">
	     			    </div>
	     			</div>
	                                            <input type="hidden" name="id" value="{{ $payment->id }}">
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