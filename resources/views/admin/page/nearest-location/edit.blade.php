@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Update Nearest Location</h4>
                        <a href="{{ route('nearest-location.index') }}" class="btn btn-default btnwhite">Back to Location</a>
                    </div>
                    <div class="card-body">                        
                        <div class="padBox">
                            <form action="{{ route('nearest-location.update', Request::segment(2)) }}" id="updateNearestLocationForm" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="row">
                                    <div class="col-md-12">                                       
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="title" value="{{ @$location->title }}" type="text" placeholder="Enter Title">
                                        </div>
                                    </div>  
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" name="address" value="{{ @$location->address }}" type="text" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Timing</label>
                                            <input class="form-control" name="working_hour" value="{{ @$location->working_hour }}" type="text" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mobile no</label>
                                            <input class="form-control" name="mobile_no" value="{{ @$location->mobile_no }}" type="text" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input class="form-control" name="location_image" value="{{ @$location->image }}" type="file" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input class="form-control" name="link" value="{{ @$location->link }}" type="text" placeholder="Enter Title">
                                        </div>
                                    </div>                                  
                                </div>                               
                                <div class="mt-2">
                                    <input type="hidden" id="locationId" value="{{ @$location->id }}">
                                    <input type="hidden" name="old_image" value="{{ @$location->fake_image }}">
                                    <button class="btn btn-primary" id="updateNearestLocationFormBtn" type="submit">Submit</button>
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