@extends('layouts.websiteapp')
@section('main_content')
<!-- Main Container  -->
<div  class="main-container container account res">
    <div style="height:100vh;">
        <div class="row">
            <div id="content" class="col-md-9">
                @if (Session::has('successMsg'))
                    <span class="alert alert-success d-block">{{ session('successMsg') }}</span>
                @endif
            </div>
            <div class="row">
                <a class="btn btn-sm btn-success" data-id="" href="">Resend Verification Mail</a>
            </div>
        </div>
    </div>
</div>
<!-- //Main Container -->
@endsection
