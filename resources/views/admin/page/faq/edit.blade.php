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
                        <div class="padBox">
                            <form action="{{ route('faq.update', $faq->id) }}" id="updateFaqForm" method="PATCH">
                                @csrf
                                <div class="row">                                                          
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Question</label>
                                            <input class="form-control" name="question" value="{{ @$faq->question }}" type="text" placeholder="Enter Question">
                                        </div>
                                    </div>                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Answer</label>
                                            <textarea name="answer" rows="5" cols="100">{{ @$faq->answer }}</textarea>
                                        </div>
                                    </div>  
                                </div>                               
                                <div class="mt-2">
                                    <input type="hidden" name="id" id="editedFaqId" value="{{ $faq->id }}">
                                    <button class="btn btn-primary" id="updateFaqFormBtn" type="submit">Update</button>
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