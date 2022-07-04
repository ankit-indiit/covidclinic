@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">About Us</h4>
                        {{-- <a href="{{ route('home.create') }}" class="btn btn-default btnwhite">Add</a> --}}
                    </div>
                    <div class="card-body">
                         @php
                         // print_r($page->description);
                            // $description = unserialize($page->description);                            
                         @endphp
                        <div class="padBox">
                            <form action="{{ route('home.store') }}" id="addAboutForm" method="post">
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
                                            <label>About Us</label>
                                            <textarea name="about_us" id="description" rows="10" cols="80">{{ @$page->desc['about_us'] }}</textarea>
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
                                            <label>Who We Are</label>
                                            <textarea name="who_we_are" id="description1" rows="10" cols="80">{{ @$page->desc['who_we_are'] }}</textarea>
                                        </div>
                                    </div>                                    
                                </div>
                               
                                <div class="mt-2">
                                    <input type="hidden" name="id" value="{{ @$page->id }}">
                                    <button class="btn btn-primary" id="addAboutFormBtn" type="submit">Submit</button>
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