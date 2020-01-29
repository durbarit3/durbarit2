@extends('layouts.adminapp')
@section('admin_content')
 <div class="content_wrapper">
      <div class="middle_content_wrapper">
	<section class="page_area">
	     <div class="row">     						
		<div class="col-lg-6 offset-3">
		     <div class="panel">
			<div class="panel_header">
			     <div class="panel_title"><span class="text-center">SEO (Search Engine Optimization) </span></div>
			</div>
			    <div class="panel_body">
	                                   <form class="py-2" action="{{ route('admin.seo.update') }}" method="post" >
	                                   	@csrf
	                                         <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">Meta Title</label>
	                                             <div class="col-sm-9">
	                                                 <input class="form-control" type="text" value="{{ $seo->meta_title }}"  required="" name="meta_title">
	                                             </div>
	                                         </div>
	                                         <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">Meta Author </label>
	                                             <div class="col-sm-9">
	                                                 <input class="form-control" type="text" value="{{ $seo->meta_author }}"  name="meta_author">
	                                             </div>
	                                         </div>

	                                          <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">Meta Keyword</label>
	                                             <div class="col-sm-9">
	                                                 <input class="form-control" type="text" value="{{ $seo->meta_key }}"   name="meta_key">
	                                             </div>
	                                         </div>
	                                          <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">Meta Description</label>
	                                             <div class="col-sm-9">
	                                               <textarea class="form-control" rows="3" name="meta_description">
	                                               	{{ $seo->meta_description }}
	                                               </textarea>
	                                             </div>
	                                         </div>
	                                           <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">Google verification </label>
	                                             <div class="col-sm-9">
	                                                 <input class="form-control" type="text" value="{{ $seo->google_verification }}"   name="google_verification">
	                                             </div>
	                                         </div>
	                                           <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">Bing verification </label>
	                                             <div class="col-sm-9">
	                                                 <input class="form-control" type="text" value="{{ $seo->bing_verification }}"  name="bing_verification">
	                                             </div>
	                                         </div>
	                                          <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">Google Analytics</label>
	                                             <div class="col-sm-9">
	                                               <textarea class="form-control" rows="3" name="google_analytic">
	                                               	{{ $seo->google_analytic }}
	                                               </textarea>
	                                             </div>
	                                         </div>

	                                          <div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label">Alexa Analytics</label>
	                                             <div class="col-sm-9">
	                                               <textarea class="form-control" rows="3" name="alexa_analytic">
	                                               	{{ $seo->alexa_analytic }}
	                                               </textarea>
	                                             </div>
	                                         </div>
	                                       <input type="hidden" name="id" value="{{ $seo->id }}">
	                                      	<br>
	                                      	<div class="form-group row">
	                                             <label for="example-text-input" class="col-sm-3 col-form-label"></label>
	                                             <div class="col-sm-9">
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