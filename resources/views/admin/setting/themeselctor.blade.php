@extends('layouts.adminapp')
@section('admin_content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content_wrapper">
    <div class="middle_content_wrapper">
        <section class="page_area">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel_header">
                            <div class="panel_title"><span class="text-center">Change Your Home Page</span></div>
                        </div>
                        <div class="panel_body">

                            <div class="form-group row">
                                @foreach($themselect as $data)
                                <div class="col-sm-3 text-center">
                                    <img src="{{asset('public/frontend/image/catalog/demo/menu/feature/')}}/{{$data->theme_image}}" style="height: 160px; width: 100%;"><br><br>
                                    <span class="theme_option_text" col-form-label">{{$data->theme_display_name}}</span><br><br>
                                    <label class="switch">
                                        <input type="checkbox" id="themecheckbox{{ $data->id }}" onchange="update_todays_deal(this)" value="{{ $data->id }}" <?php if ($data->status == 1) echo "checked"; ?>>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

<script>
    function update_todays_deal(el) {
        //alert('success');
        if (el.checked) {
            var status = 1;
        } else {
            var status = 0;
        }


        $.post('{{ route('admin.theme.option.change') }}', {_token: '{{ csrf_token() }}',id: el.value,status: status},


            function(data) {
                console.log(data);
                if (data == 1) {
                    showAlert('success', 'Published products updated successfully');
                } else {
                    showAlert('danger', 'Something went wrong');
                }
            });
    }
</script>
