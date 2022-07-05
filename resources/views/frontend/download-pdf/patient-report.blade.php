<!DOCTYPE html>
<html>
   <head>
      <title>{{ $patientReport->title }}</title>
      <style>
      body
      {
              font-family: sans-serif;
              font-size: 13px;
      }
       .card-body .report-detail .table
       {
           border: 1px solid #dee2e6;
       }
       .card-body .report-detail .table thead
       {
           background:rgba(14,32,255,0.10);
       } 
       .card-body .report-detail .table thead th
       {
           padding: 6px 7px; 
           font-size: 13px;
           text-align: left;
       }  
       .card-body .report-detail .table tbody td
       {
           padding: 6px 7px; 
           font-size: 13px;
           font-weight: 400;
           border-right: 1px solid #dee2e6;
           text-align: left;
       }  
       .card-body .report-detail .table tbody td:last-child
       {
           padding: 6px 4px; 
           font-size: 13px;
           font-weight: 400;
           border-right: 0px;
       }  
       .card-body .report-detail .table
       {
           border-collapse: collapse;
           border-spacing: 0px;
       }  
.width_50 {
  width: 50%; 
}
.width_33 {
  width: 33.333333%;   
}
.width_100 {
  width: 100%; 
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.table_header
{
    width: 100%; 
    border-bottom: 1px solid #f0f0ff;
}
.table_info
{
    width: 100%; 
    padding-bottom: 50px;
}
.table_header table
{
    border: 0px;
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0px; 
}
.table_info table
{
    border: 0px;
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0px; 
}
.table_info table td
{
    vertical-align: baseline;
}
      </style>
   </head>
   <body>
       
      <div class="card">
            <div class="table_header">
            <table>
                <tr>
                   <td class="width_33">
                      <div class="clinic-logo">
                         <img height="50px" src="{{ url('public/assets/img/logo.png') }}">
                         <h3><b>Email: </b>{{ $clinicDetail->email }}</h3>
                      </div>
                   </td>
                   <td class="width_33 text-center">
                      <h2 class="mt-mob-10">Covid Test Report</h2>
                   </td>
                   <td class="width_33   text-end">
                      <div class="clinic-info text-right">
                         <h4>AxisDoc Medical</h4>
                         <p>{{ $clinicDetail->address1 }}</p>
                         <p><b>Phone:</b> {{ $clinicDetail->phone_number }}</p>
                      </div>
                   </td>
                </tr>
            </table>          
            </div> 
            <div class="table_info">
              
            <table>
                <tr>
                   <td class="width_50">
                   		@php
    	                    $patientAge = date_diff(date_create($patientDetail->dob), date_create(date("Y-m-d")));
    	                @endphp 
    	                <div class="report-text">
    	                    <p><b>Patient Name</b>: {{ $patientDetail->first_name }} {{ $patientDetail->last_name }}</p>
    	                    <p><b>Phone. No. </b>: {{ $patientDetail->phone_number }}</p>
    	                    <p><b>Address. </b>: {{ $patientDetail->address1 }}</p>
    	                    <p><b>Email. </b>: {{ $patientDetail->email }}</p>
    	                    <p><b>Gender/Age </b>: {{ $patientDetail->gender }} / {{$patientAge->format('%y')}} Years</p>
    	                </div>
                   </td>
                   <td class="width_50   text-right">
                      <div class="report-text">
                         <p><b>Report ID.</b>: #{{ $patientReport->id }}</p>
                         <p><b>Collected Date/Time</b>: {{ $patientReport->reg_date }}</p>
                         <p><b>Reported Date/Time</b>: {{ $patientReport->created_at }}</p>
                      </div>
                   </td>
                </tr>
            </table>          
            </div>          
         
         <div class="card-body">            
               <div class="row">
               <div class="col-12 mt-4">
                  <div class="tablescroll report-detail">
                     <div id="example_wrapper" class="dataTables_wrapper no-footer">
                         <table id="example" class="table" style="width:100%; ">
	                        <thead style="">
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