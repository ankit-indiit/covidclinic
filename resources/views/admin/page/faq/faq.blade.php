@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Faqs</h4>
                        <a href="{{ route('home.create') }}" class="btn btn-default btnwhite">Add</a>
                    </div>
                    <div class="card-body">
                         @php
                         // print_r($page->description);
                            // $description = unserialize($page->description);                            
                         @endphp
                        <div class="padBox">
                            <form action="{{ route('home.store') }}" id="addFaqForm" method="post">
                                @csrf
                                <div class="row">                                                          
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Faq</label>
                                            <textarea name="faq" id="description" rows="10" cols="80">{{ @$page->desc['faq'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Question</label>
                                            <input class="form-control" name="sub_title" value="{{ @$page->question }}" type="text" placeholder="Enter Question">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Answer</label>
                                            <input class="form-control" name="sub_title" value="{{ @$page->answer }}" type="text" placeholder="Enter Answer">
                                        </div>
                                    </div>
                                </div>                               
                                <div class="mt-2">
                                    <input type="hidden" name="id" value="{{ @$page->id }}">
                                    <button class="btn btn-primary" id="addFaqFormBtn" type="submit">Submit</button>
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