@extends('frontend.layout.master')
@section('content')	
@include('frontend.component.breadcrumb')
<section class="editprofile myaccount">
	<div class="container">
		<div class="card">
	       	<div class="card-header">
				 <div class="row align-items-center">
					 <div class="col-md-6 col-sm-6">
						<h2>All Reports</h2>
					 </div>
					 <div class="col-md-6 col-sm-6 text-sm-end">					 	
						@if (Auth::user()->role == 'clinic')
							<a class="btn btn-submit" href="{{ route('add-report-form', Request::segment(3)) }}">Add Report</a>
						@endif
					 </div>
				 </div>
	        </div>
			<div class="card-body">
			<div class="report-filters">
				<form method="get">
					<div class="row align-items-center  mb-4">
					  <div class="col-md-3 col-lg-3 col-sm-6 form-group mb-2">
					    <label>Start Date</label>
						<input type="date" name="start_date" value="{{ request()->start_date ? request()->start_date : '' }}" placehoder="Start Date" class="form-control" id="startdate">
					  </div>
					  <div class="col-md-3 col-lg-3 col-sm-6  form-group  mb-2">
					      <label>End Date</label>
						  <input type="date" name="end_date" value="{{ request()->start_date ? request()->start_date : '' }}" placehoder="End Date" class="form-control" id="enddate">
					  </div>
					  <div class="col-md-3 col-lg-4 form-group  mb-2">
					      <label>Specimen Type</label>
						    <select class="form-control" name="specimen_type" placeholder="Specimen Typ">
								 <option value="">Select</option>
								 <option {{ request()->specimen_type == 'Covid Infection' ? 'selected' : '' }} value="Covid Infection">Covid Infection</option>
								 <option {{ request()->specimen_type == 'Throat/Nasopharyngeal Swab' ? 'selected' : '' }} value="Throat/Nasopharyngeal Swab">Throat/Nasopharyngeal Swab</option>
							</select>
					  </div>
					    <div class="col-md-3 col-lg-2 mt-3 form-group">
					      <button type="submit" class="btn w-100 btn-submit box-shadow-none" href="javascript:void(0)">Filter</button>		
					  </div>
					</div>					
				</form>
				</div>
                 {!! $dataTable->table() !!}
			</div>				   
		</div>	
	 </div>	
</section>
@endsection
@section('customeScript')
{{-- <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script> --}}
{!! $dataTable->scripts() !!}
<script type="text/javascript">
  
</script>
@endsection