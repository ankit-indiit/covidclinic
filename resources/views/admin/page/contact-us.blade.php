@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
     <div class="content container-fluid">
         <div class="row">
             <!-- Users -->
             <div class="col-md-12">
                 <div class="card card-table">
                     <div class="card-header d-flex justify-content-between align-items-center">
                         <h4 class="card-title">Contact Us List</h4>
                     </div>
                     <div class="card-body">
                         <div class="table-responsive">
                             <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12"><table class="table table-hover table-center mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                 <thead>
                                     <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Sr. No: activate to sort column descending" style="width: 30px;">Sr. No</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Answers: activate to sort column ascending" style="width: 40px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" style="width: 50px;">Email</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 200px;">Message</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($contactLists as $list)
                                     <tr role="row" class="odd">
                                         <td class="sorting_1">{{ $list->id }}</td>
                                         <td class="text-wrap">{{$list->first_name}} {{$list->last_name}}</td>
                                         <td class="text-wrap">{{$list->email}}</td>
                                         <td class="text-wrap">{{$list->message}}</td>
                                     </tr>
                                     @endforeach
                                 </tbody>
                             </table></div></div></div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- End Of Users -->
         </div>
     </div>
 </div>
@endsection