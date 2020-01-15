@extends('layouts.adminapp')
@section('admin_content')
<div class="content_wrapper">
    <div class="middle_content_wrapper">
        <section class="page_area">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="panel">
                        <div class="panel_header">
                            <div class="panel_title"><span class="text-center">Footer Option </span></div>
                        </div>
                        <div class="panel_body">
                            <form class="py-2" action="{{ route('admin.front.logo') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Company Address:</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="" required="" name="company_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Company Phone:</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="" required="" name="company_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Company Email:</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="" required="" name="company_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Company Copyright Text:</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" value="" required="" name="company_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Accepted Payment Methods:</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" value="" required="" name="company_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Accepted Payment Methods:</label>
                                    <div class="col-sm-9">
                                        <textarea rows="3" class="form-control"></textarea>
                                    </div>
                                </div>


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