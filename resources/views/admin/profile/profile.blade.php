@extends('layouts.adminapp')
@section('admin_content')
<div class="content_wrapper">
     <div class="row">
     	<div class="col-lg-5"></div>
     	<div class="col-lg-6">
     		<div class="card mt-4" style="width: 18rem;">
     		  <img src="{{ asset(Auth::user()->avatar) }}" class="card-img-top" alt="...">
     		  <div class="card-body">
     		    <h5 class="card-title">{{ Auth::user()->name }}</h5>
     		  </div>
     		  <ul class="list-group list-group-flush">
     		    <li class="list-group-item">{{ Auth::user()->phone }}</li>
     		    <li class="list-group-item">{{ Auth::user()->email }}</li>
     		    <li class="list-group-item">{{ Auth::user()->address }}</li>
     		  </ul>
     		  <div class="card-body">
     		    <a href="{{ route('admin.edit.profile') }}" class="card-link">Edit Profile</a>
     		    <a href="{{ route('admin.password.change') }}" class="card-link">Password Change</a>
     		  </div>
     		</div>
     	</div>
     </div>
</div>
@endsection