@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Home</h4>
                        <a href="{{ route('home.create') }}" class="btn btn-default btnwhite">Add</a>
                    </div>
                    <div class="card-body">
                         @php
                         // print_r($page->description);
                            // $description = unserialize($page->description);                            
                         @endphp
                        <div class="padBox">
                            <form action="{{ route('home.store') }}" id="addHomeForm" method="post">
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
                                            <input class="form-control" name="title" value="{{ @$page->title }}" type="text" placeholder="Enter Title">
                                        </div>
                                    </div>                                  
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" id="description" rows="10" cols="80">{{ @$page->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Book Now Link</label>
                                            <input class="form-control" name="title" value="{{ @$page->title }}" type="text" placeholder="Book Now Link">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>View My Result Link</label>
                                            <input class="form-control" name="title" value="{{ @$page->title }}" type="text" placeholder="Book Now Link">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2">
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
    
     var editor1 =  CKEDITOR.replace('description', {});
       editor1.on('change', function() {
            editor1.updateElement();
       });

</script>
@endsection