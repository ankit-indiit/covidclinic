@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Contact Us</h4>
                    </div>
                    <div class="card-body">                         
                        <div class="padBox">
                            <form action="{{ route('home.store') }}" id="addContactForm" method="post">
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
                                            <label>Contact Us</label>
                                            <textarea name="contact_us" id="description" rows="10" cols="80">{{ @$page->desc['contact_us'] }}</textarea>
                                        </div>
                                    </div>                                   
                                </div>                               
                                <div class="mt-2">
                                    <input type="hidden" name="id" value="{{ @$page->id }}">
                                    <button class="btn btn-primary" id="addContactFormBtn" type="submit">Submit</button>
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

</script>
@endsection