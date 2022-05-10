@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <!-- Users -->
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Add Home Content</h4>
                        <a href="{{ route('home.index') }}" class="btn btn-default btnwhite">Back Home</a>
                    </div>
                    <div class="card-body">
                        <div class="padBox">
                            <form action="{{ route('home.store') }}" id="addHomeForm" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h1>Basic Information</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Title</label>
                                          <input class="form-control" name="title" type="text" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>link</label>
                                          <input class="form-control" name="link" type="text" placeholder="Enter Button Link">
                                        </div>
                                    </div>                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label>Description</label>
                                          <textarea name="description" id="editor"></textarea>
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
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
	 tinymce.init({
	    selector: 'textarea#editor',
	    menubar: false
	  });
</script>
@endsection