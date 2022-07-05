@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="card card-table">
               <div class="card-header d-flex justify-content-between align-items-center">
                  <h4 class="card-title">FAQs</h4>
                  <a href="{{ route('faq.create') }}" class="btn btn-default btnwhite">Add Faq</a>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                           <div class="col-sm-12">
                              <table class="table table-hover table-center mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                 <thead>
                                    <tr role="row">
                                       <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order ID: activate to sort column descending" style="width: 71.2031px;">ID</th>
                                       <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 131.062px;">Question</th>
                                       <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending" style="width: 173.25px;">Answer</th>
                                       <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 76.6094px;">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>                                    
                                    @foreach ($faqs as $faq)
                                        <tr role="row" class="odd">
                                           <td class="sorting_1">{{ $loop->iteration }}</td>
                                           <td>{{ substr($faq->question, 0, 20) }}..</td>
                                           <td>{{ substr($faq->answer, 0, 50) }}...</td>
                                           <td>
                                              <a href="{{ route('faq.edit', $faq->id) }}" class="btn btn-sm bg-info-light">
                                              <i class="far fa-eye mr-1"></i>
                                              </a>
                                              <a href="javascript: void(0)" id="deleteFaq" data-id="{{ $faq->id }}" class="btn btn-sm bg-danger-light delete_review_comment">
                                                <i class="far fa-trash-alt"></i>
                                              </a>
                                           </td>
                                        </tr>
                                    @endforeach
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
      </div>
   </div>
</div>
@endsection