@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="row">
         <!-- Users -->
         <div class="col-md-12">
            <div class="card card-table">
               <div class="card-header d-flex justify-content-between align-items-center">
                  <h4 class="card-title">Report Detail</h4>
                  {{-- <a href="{{ route('crete-user-form', 'patient') }}" class="btn btn-default btnwhite">Add Patient</a> --}}
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                      <div class="p-4 text-center">
                        <h2>{{$report->title}}</h2>
                      </div>
                      <div class="row p-4">
                        <div class="col-md-6">
                          <div class="clinic-logo">
                             <img src="{{ asset('assets/img/logo.png') }}" class="pb-2" width="150" height="40">
                             <h5>Email: {{ @$clinicDetail->email }}</h5>
                          </div>
                          <br>
                          <br>
                          <div class="report-text">
                            <p>
                              <b>Patient Name</b>: 
                              {{ $patientDetail->first_name }} 
                              {{ $patientDetail->last_name }}
                            </p>
                            <p><b>Phone. No. </b>: {{ $patientDetail->phone_number }}</p>
                            <p><b>Address. </b>: {{ $patientDetail->address1 }}</p>
                            <p><b>Email. </b>: {{ $patientDetail->email }}</p>
                            <p>
                              <b>Gender/Age</b>: 
                              {{ $patientDetail->gender }}
                              /
                              {{ date('Y') - date('Y',strtotime($patientDetail->dob)) }}
                            </p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="clinic-info text-sm-end">
                            <h4>{{ @$clinicDetail->first_name }} {{ @$clinicDetail->last_name }}</h4>
                            <p></p>
                            <p><b>Phone:</b> {{ @$clinicDetail->phone_number }}</p>
                          </div>
                          <br>
                          <br>
                          <div class="report-text">                                           
                            <p><b>Report ID.</b>: #{{ $report->id }}</p>
                            <p><b>Collected Date/Time</b>: {{ $report->created_at }}</p>
                            <p><b>Reported Date/Time</b>: {{ $report->created_at }}</p>
                          </div>
                        </div>
                      </div>
                        <div class="row">
                           <div class="col-sm-12">
                              <table class="table table-hover table-center mb-0 dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                 <thead>
                                    <tr role="row">
                                       <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order ID: activate to sort column descending" style="width: 71.2031px;">ID</th>
                                       <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 131.062px;">Patient Name</th>
                                       <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 131.062px;">Age</th>
                                       <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 131.062px;">Sex</th>
                                       <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending" style="width: 173.25px;">Specimen type</th>
                                       <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 193.531px;">Date</th>
                                       <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 193.531px;">Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                      <tr role="row" class="odd">
                                         <td class="sorting_1">{{ $report->id }}</td>
                                         <td>{{ $patientDetail->first_name }} {{ $patientDetail->last_name }}</td>
                                         <td>{{ date('Y') - date('Y',strtotime($patientDetail->dob)) }}</td>
                                         <td>{{ $patientDetail->gender }}</td>
                                         <td>{{ $report->specimen_type }}</td>
                                         <td>{{ $report->created_at }}</td>         
                                         <td>{{ $report->status }}</td>
                                      </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <div class="row">
                                                     
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Of Users -->
      </div>
   </div>
</div>
@endsection