@extends('frontend.layout.master')
@section('content')	
@include('frontend.component.breadcrumb')
<section class="editprofile myaccount">
   <div class="container">
      <div class="card">
         <div class="card-header">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <h2>Add Report</h2>
               </div>
               <div class="col-md-6 col-sm-6 text-sm-end">
                  <a class="btn btn-submit" href="{{ route('patient-reports', Request::segment(3)) }}">Back To Reports</a>
               </div>
            </div>
         </div>
         <div class="card-body">
            {{ Form::open(['url' => route('add-patient-report'), 'id' => 'addPatientReportForm', 'class' => '', 'enctype' => 'multipart/form-data']) }}
            <div class="row">
	            <div class="row">		            	 
	              	<div class="col-sm-12 col-md-4 col-lg-4">
		                <div class="form-group mb-3">
		                  {{ Form::label('title', 'Title') }}
		                   {{ Form::text('title', '', ['class' => 'form-control', 'id' => '', 'placeholder' => 'Title']) }}
		                </div>
	              	</div>		              		               
	               <div class="col-sm-6 col-md-4 col-lg-4">
	                  <div class="form-group mb-3">
	                     <label>Specimen  Type</label>
	                     <select class="form-control" name="specimen_type">
	                        <option value="">Select</option>
	                        <option value="Covid Infection">Covid Infection</option>
	                        <option value="Throat/Nasopharyngeal Swab">Throat/Nasopharyngeal Swab</option>
	                     </select>
	                  </div>
	               </div>
	               <div class="col-sm-6 col-md-4 col-lg-4">
	                  <div class="form-group mb-3">
	                     <label>Status</label>
	                     <select class="form-control" name="status">
	                        <option value="">Select</option>
	                        <option value="Positive">Positive</option>
	                        <option value="Negative">Negative</option>
	                        <option value="Pending">Pending</option>
	                     </select>
	                  </div>
	               </div>
	               <div class="col-md-12 col-lg-12">
	                  <div class="form-group mb-3">
	                     <label>Upload Report</label>
	                     <div class="upload-file">
	                        <label for="report" class="upload-doc">
	                           <div>
	                              <i class="fas fa-cloud-upload-alt"></i> 
	                              <h2>Drag  a Report or Upload File</h2>
	                           </div>
	                        </label>
	                        <input type="file" id="report" name="report" style="display:none;">
	                     </div>
	                  </div>
	               </div>
       			 </div>
       			 <input type="hidden" name="patient_id" value="{{ $patientId }}">
       			 <input type="hidden" id="patientId" value="{{ Request::segment(3) }}">
         	</div>
	        <div class="card-footer text-end">
	        	{{ Form::submit('Save Changes', ['class' => 'btn btn-submit', 'id' => 'addPatientReportFormBtn']) }}
	        </div>
         	{{ Form::close() }}
      </div>
   </div>
</section>
@endsection
@section('customScript')
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript">
	$("#addPatientReportForm").validate({
	    rules: {
	       title: {
	          required: true,
	       },
	       specimen_type: {
	          required: true,
	       },
	       status: {
	          required: true,
	       },
	       report: {
	          required: true,
	       },            	       	       
	    },
	    messages: {
	       title: "Please enter report title",
	       specimen_type: "Please choose specimen type",
	       status: "Please choose status",
	       zipcode: "Please enter your zipcode",
	       report: {
	          required: "Please upload report",
	       },	      
	    },
	    submitHandler: function(form,e) {
	    	e.preventDefault();
            var patientId = $('#patientId').val();
            var form = $('#addPatientReportForm')[0];
            var serializedData = new FormData(form);
            console.log(serializedData);
	       	$('#addPatientReportFormBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
	       	$.ajax({	          	
              	headers: {
                  'X-CSRF-Token': $('input[name="_token"]').val()
               	},
               	enctype: 'multipart/form-data',
               	type: 'post',
               	url: "{{ url('clinic/add-patient-report') }}",
               	data: serializedData,
               	dataType: 'json',
               	processData: false,
               	contentType: false,
               	cache: false,
	          	success: function(data) {              
	             	$('#addPatientReportFormBtn').html('Save Changes');
	             	if (data.success == true) {
	                	swal("", data.message, "success", {
	                   	button: "close",
	                });
	                $('.swal2-confirm').on('click', function(){
	                  	window.location.href = _baseURL+'/clinic/patient-reports/'+patientId;
	                });
	             	} else {
	                	swal("", data.message, "error", {
	                   		button: "close",
	                	});
	             	}
	          	}
	       	});
	       	return false;
	    }
	 });
</script>
@endsection