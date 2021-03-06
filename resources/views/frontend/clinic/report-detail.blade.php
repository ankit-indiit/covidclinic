@extends('frontend.layout.master')
@section('content')
@include('frontend.component.breadcrumb', [
  'title' => 'Report Detail',
  'home' => route('home'),
])
<section class="editprofile myaccount" id="patientPrintReport">
   <div class="container">
      <div class="card allreport_patient">
         <div class="card-header">
            <div class="row align-items-center">
               <div class="col-md-4 col-sm-4 ">
                  <div class="clinic-logo">
                     <img height="50px" src="{{ url('public/assets/img/logo.png') }}">
                     <h3><b>Email: </b>{{ $clinicDetail->email }}</h3>
                  </div>
               </div>
               <div class="col-md-4 col-sm-4 text-start text-sm-center">
                  <h2 class="mt-mob-10">{{ $reportDetail->title }}</h2>
               </div>
               <div class="col-md-4  col-sm-4   text-sm-end">
                  <div class="clinic-info text-sm-end">
                     <h4>AxisDoc Medical</h4>
                     <p>{{ $clinicDetail->address1 }}</p>
                     <p><b>Phone:</b> {{ $clinicDetail->phone_number }}</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-6 col-lg-4 col-sm-6">
                  @php
                    $patientAge = date_diff(date_create($patientDetail->dob), date_create(date("Y-m-d")));
                  @endphp 
                  <div class="report-text">
                     <p><b>Patient Name</b>: {{ $patientDetail->first_name }} {{ $patientDetail->last_name }}</p>
                     <p><b>Phone. No. </b>: {{ $patientDetail->phone_number }}</p>
                     <p><b>Address. </b>: {{ $patientDetail->address1 }}</p>
                     <p><b>Email. </b>: {{ $patientDetail->email }}</p>
                     <p><b>Gender/Age </b>: {{ $patientDetail->gender }}/ {{$patientAge->format('%y')}} Years</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4  col-sm-6 offset-lg-4 text-sm-end">
                  <div class="report-text">                                           
                        <p><b>Report ID.</b>: #{{ $reportDetail->id }}</p>
                        <p><b>Collected Date/Time</b>: {{ $reportDetail->reg_date }}</p>
                        <p><b>Reported Date/Time</b>: {{ $reportDetail->created_at }}</p>
                  </div>
               </div>
               <div class="col-md-12 mt-4">
                  <div class="tablescroll report-detail">
                     <table id="example" class="table table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th>Sample ID</th>
                              <th>Patient Name</th>
                              <th>Age</th>
                              <th>Sex</th>
                              <th>Specimen Type</th>
                              <th>Date</th>
                              <th>Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>{{ $reportDetail->id }}</td>
                              <td>{{ $patientDetail->first_name }} {{ $patientDetail->last_name }}</td>
                              <td>{{$patientAge->format('%y')}} Years</td>
                              <td>{{ $patientDetail->gender }}</td>
                              <td>{{ $reportDetail->specimen_type }}</td>
                              <td>{{ $reportDetail->created_at }}</td>
                              <td><span class="label label-primary">{{ $reportDetail->status }}</span></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="card-footer text-end">
            @php $reportId = Crypt::encrypt($reportDetail->id); @endphp
            <a href="{{ route('print-report', $reportId) }}" target="__blank">
               <button class="btn btn-print" {{-- onclick="printDiv('patientPrintReport')" --}} data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-label="Print Report"><i class="fa fa-print"></i></button>                              
            </a>
            <a href="{{ route('download-pdf', $reportId) }}">
               <button class="btn btn-print" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Download Report" aria-label="Download Report"><i class="fa fa-download"></i></button>
            </a>     
         </div>
      </div>
   </div>
</section>
@endsection
@section('customScript')
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript">
   function printDiv(sectionId) {
     var printContents = document.getElementById(sectionId).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
   }
</script>
@endsection