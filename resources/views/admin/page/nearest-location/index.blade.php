@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
     <div class="content container-fluid">
         <div class="row">
             <!-- Users -->
             <div class="col-md-12">
                 <div class="card card-table">
                     <div class="card-header d-flex justify-content-between align-items-center">
                         <h4 class="card-title">Nearest Location</h4>
                         <a href="{{ route('nearest-location.create') }}" class="btn btn-default btnwhite">Add Location</a>
                     </div>
                    <form action="{{ route('nearest-location.store') }}" id="addLocationForm" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row p-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h1>Section Description</h1>
                                </div>
                            </div>                                                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Section Title</label>
                                    <input class="form-control" name="title" value="{{ @$page->desc['title'] }}" type="text" placeholder="Enter Title">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Section Sub Title</label>
                                    <input class="form-control" name="sub_title" value="{{ @$page->desc['sub_title'] }}" type="text" placeholder="Enter Title">
                                </div>
                            </div>
                            <div class="m-4">
                                <input type="hidden" name="section_title" value="section_title">
                                <input type="hidden" name="id" value="{{ @$page->id }}">
                                <button class="btn btn-primary" id="addLocationFormBtn" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                     <div class="card-body">
                         <div class="table-responsive">
                             <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12"><table class="table table-hover table-center mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                 <thead>
                                     <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Sr. No: activate to sort column descending" style="width: 30px;">Sr. No</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Answers: activate to sort column ascending" style="width: 40px;">Title</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" style="width: 50px;">Address</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 200px;">Timing</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 200px;">Mobile no</th>
                                       
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 200px;">Image</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 200px;" colspan="2">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($locations as $location)
                                     <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $loop->iteration }}</td>
                                        <td class="sorting_1">{{ $location->title }}</td>
                                        <td class="text-wrap">{{$location->address}}</td>
                                        <td class="text-wrap">{{$location->working_hour}}</td>
                                        <td class="text-wrap">{{$location->mobile_no}}</td>
                                        <td class="text-wrap">
                                             <img src="{{$location->image}}">
                                        </td>
                                        <td>
                                            <a href="{{ route('nearest-location.edit', $location->id) }}" class="btn btn-sm bg-info-light">
                                                <i class="far fa-eye mr-1"></i>
                                            </a>
                                            <a href="javascript: void(0)" id="deleteLocation" data-id="{{ $location->id }}" class="btn btn-sm bg-danger-light delete_review_comment">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
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
