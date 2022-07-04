@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Home</h4>
                        {{-- <a href="{{ route('home.create') }}" class="btn btn-default btnwhite">Add</a> --}}
                    </div>
                    <div class="card-body">
                         @php
                         // print_r($page->description);
                            // $description = unserialize($page->description);                            
                         @endphp
                        <div class="padBox">
                            <form action="{{ route('home.store') }}" id="addHomeForm" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h1>Section 1</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="title" value="{{ @$page->title }}" type="text" placeholder="Enter Title">
                                        </div>
                                    </div>  
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Sub Title</label>
                                            <input class="form-control" name="sub_title" value="{{ @$page->title }}" type="text" placeholder="Enter Title">
                                        </div>
                                    </div>                                  
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" id="description" rows="10" cols="80">{{ @$page->desc['description'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Book Now Link</label>
                                            <input class="form-control" name="book_now" value="{{ @$page->desc['book_now'] }}" type="text" placeholder="Book Now Link">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>View My Result Link</label>
                                            <input class="form-control" name="my_result" value="{{ @$page->desc['my_result'] }}" type="text" placeholder="Book Now Link">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h1>Section 2</h1>
                                        </div>
                                    </div>                                                            
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>About</label>
                                            <textarea name="about" id="description1" rows="10" cols="80">{{ @$page->desc['about'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Know More</label>
                                            <input class="form-control" name="know_more" value="{{ @$page->desc['know_more'] }}" type="text" placeholder="Enter Link">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h1>Section 3</h1>
                                        </div>
                                    </div>                                                            
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>How it works</label>
                                            <textarea name="how_it_works" id="description2" rows="10" cols="80">{{ @$page->desc['how_it_works'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label>First Image</label>
                                            <input class="form-control" name="first_image" value="" type="file" placeholder="Enter Title">                
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{ asset("images/how-it-works") }}/{{ @$page->desc['first_image'] }}">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Title</label>
                                            <input class="form-control" name="first_title" value="{{ @$page->desc['first_title'] }}" type="text" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Sub Title</label>
                                            <input class="form-control" name="first_sub_title" value="{{ @$page->desc['first_sub_title'] }}" type="text" placeholder="Enter Sub Title">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label>Second Image</label>
                                            <input class="form-control" name="second_image" value="{{ @$page->desc['second_image'] }}" type="file" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{ asset("images/how-it-works") }}/{{ @$page->desc['second_image'] }}">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Second Title</label>
                                            <input class="form-control" name="second_title" value="{{ @$page->desc['second_title'] }}" type="text" placeholder="Enter Title">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Second Sub Title</label>
                                            <input class="form-control" name="second_sub_title" value="{{ @$page->desc['second_sub_title'] }}" type="text" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label>Third Image</label>
                                            <input class="form-control" name="third_image" value="{{ @$page->desc['third_image'] }}" type="file" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{ asset("images/how-it-works") }}/{{ @$page->desc['third_image'] }}">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Third Title</label>
                                            <input class="form-control" name="third_title" value="{{ @$page->desc['third_title'] }}" type="text" placeholder="Enter Title">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Third Sub Title</label>
                                            <input class="form-control" name="third_sub_title" value="{{ @$page->desc['third_sub_title'] }}" type="text" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label>Fourth Image</label>
                                            <input class="form-control" name="fourth_image" value="{{ @$page->desc['fourth_image'] }}" type="file" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{ asset("images/how-it-works") }}/{{ @$page->desc['fourth_image'] }}">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Fourth Title</label>
                                            <input class="form-control" name="fourth_title" value="{{ @$page->desc['fourth_title'] }}" type="text" placeholder="Enter Title">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Fourth Sub Title</label>
                                            <input class="form-control" name="fourth_sub_title" value="{{ @$page->desc['fourth_sub_title'] }}" type="text" placeholder="Enter Title">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <input type="hidden" name="id" value="{{ @$page->id }}">
                                    <button class="btn btn-primary" id="addHomeFormBtn" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('customScript')
<script src="{{ asset('admin/assets/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">
    
    var editor =  CKEDITOR.replace('description', {});
    editor.on('change', function() {
        editor.updateElement();
    });
    var editor1 =  CKEDITOR.replace('description1', {});
    editor1.on('change', function() {
        editor1.updateElement();
    });

    var editor2 =  CKEDITOR.replace('description2', {});
    editor2.on('change', function() {
        editor2.updateElement();
    });

</script>
@endsection