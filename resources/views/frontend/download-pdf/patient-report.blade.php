<!DOCTYPE html>
<html>
   <head>
      <title>{{ $patientReport->title }}</title>
   </head>
   <body>
      <div class="card">
         <div class="card-header">
            <div class="row align-items-center">
               <div class="col-md-4 col-sm-4 ">
                  <div class="clinic-logo">
                     <img height="50px" src="http://localhost/covid-clinic/public/assets/img/logo3-white.png">
                     <h3><b>Email: </b>{{ $clinicDetail->email }}</h3>
                  </div>
               </div>
               <div class="col-md-4 col-sm-4 text-start text-sm-center">
                  <h2 class="mt-mob-10">Covid Test Report</h2>
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
	                    <p><b>Gender/Age </b>: {{ $patientDetail->email }} / {{$patientAge->format('%y')}} Years</p>
	                </div>
               </div>
               <div class="col-md-6 col-lg-4  col-sm-6 offset-lg-4 text-sm-end">
                  <div class="report-text">
                     <p><b>Report ID. {{ $patientReport->id }}</b>: 4</p>
                     <p><b>Reg Date/Time</b>: {{ $patientReport->created_at }}</p>
                     <p><b>Collected Date/Time</b>: {{ $patientReport->created_at }}</p>
                     <p><b>Reported Date/Time</b>: </p>
                  </div>
               </div>
               <div class="col-md-12 mt-4">
                  <div class="tablescroll report-detail">
                     <div id="example_wrapper" class="dataTables_wrapper no-footer">
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
	                              <td>{{ $patientReport->id }}</td>
	                              <td>{{ $patientDetail->first_name }} {{ $patientDetail->last_name }}</td>
	                              <td>{{$patientAge->format('%y')}} Years</td>
	                              <td>{{ $patientDetail->gender }}</td>
	                              <td>{{ $patientReport->specimen_type }}</td>
	                              <td>{{ $patientReport->created_at }}</td>
	                              <td><span class="label label-primary">{{ $patientReport->status }}</span></td>
	                           </tr>
	                        </tbody>
	                     </table>                    
                     </div>
                  </div>
               </div>
            </div>
         </div>         
      </div>
   </body>
</html>