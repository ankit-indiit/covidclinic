@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
     <div class="content container-fluid">
         <div class="row">
             <!-- Users -->
             <div class="col-md-12">
                 <div class="card card-table">
                     <div class="card-header d-flex justify-content-between align-items-center">
                         <h4 class="card-title">Frequently Asked Questions</h4>
                     </div>
                     <div class="card-body">
                         <div class="table-responsive">
                             <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12"><table class="table table-hover table-center mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                 <thead>
                                     <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Sr. No: activate to sort column descending" style="width: 50.3906px;">Sr. No</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Questions: activate to sort column ascending" style="width: 183.203px;">Questions</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Answers: activate to sort column ascending" style="width: 423.922px;">Answers</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" style="width: 38.8594px;">Type</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 76.625px;">Action</th></tr>
                                 </thead>
                                 <tbody>
                                     
                                     
                                     
                                     
                                       
                                 <tr role="row" class="odd">
                                         <td class="sorting_1">1</td>
                                         <td class="text-wrap">How do I make a purchase ?</td>
                                         <td class="text-wrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                         <td><label class="badge badge-primary">Buyer</label></td>
                                         <td>
                                             <a href="edit-faqs.php" class="btn btn-sm bg-success-light">
                                                 <i class="far fa-edit mr-1"></i>
                                             </a>
                                             <a href="javascript: void(0)" data-toggle="modal" data-target="#deletemodal" class="btn btn-sm bg-danger-light delete_review_comment">
                                                 <i class="far fa-trash-alt"></i>
                                             </a>
                                         </td>
                                     </tr><tr role="row" class="even">
                                         <td class="sorting_1">2</td>
                                         <td class="text-wrap">When will be payment method be charged ?</td>
                                         <td class="text-wrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                         <td><label class="badge badge-info">Seller</label></td>
                                         <td>
                                             <a href="edit-faqs.php" class="btn btn-sm bg-success-light">
                                                 <i class="far fa-edit mr-1"></i>
                                             </a>
                                             <a href="javascript: void(0)" data-toggle="modal" data-target="#deletemodal" class="btn btn-sm bg-danger-light delete_review_comment">
                                                 <i class="far fa-trash-alt"></i>
                                             </a>
                                         </td>
                                     </tr><tr role="row" class="odd">
                                         <td class="sorting_1">3</td>
                                         <td class="text-wrap">why are there multiple chargers on my card ?</td>
                                         <td class="text-wrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                            <td><label class="badge badge-primary">Buyer</label></td>
                                         <td>
                                             <a href="edit-faqs.php" class="btn btn-sm bg-success-light">
                                                 <i class="far fa-edit mr-1"></i>
                                             </a>
                                             <a href="javascript: void(0)" data-toggle="modal" data-target="#deletemodal" class="btn btn-sm bg-danger-light delete_review_comment">
                                                 <i class="far fa-trash-alt"></i>
                                             </a>
                                         </td>
                                     </tr><tr role="row" class="even">
                                         <td class="sorting_1">4</td>
                                         <td class="text-wrap">How do i add a payment method ?</td>
                                         <td class="text-wrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                         <td><label class="badge badge-info">Seller</label></td>
                                         <td>
                                             <a href="edit-faqs.php" class="btn btn-sm bg-success-light">
                                                 <i class="far fa-edit mr-1"></i>
                                             </a>
                                             <a href="javascript: void(0)" data-toggle="modal" data-target="#deletemodal" class="btn btn-sm bg-danger-light delete_review_comment">
                                                 <i class="far fa-trash-alt"></i>
                                             </a>
                                         </td>
                                     </tr><tr role="row" class="odd">
                                         <td class="sorting_1">5</td>
                                         <td class="text-wrap">Why is my credit card in not working ?</td>
                                         <td class="text-wrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                            <td><label class="badge badge-primary">Buyer</label></td>
                                         <td>
                                             <a href="edit-faqs.php" class="btn btn-sm bg-success-light">
                                                 <i class="far fa-edit mr-1"></i>
                                             </a>
                                             <a href="javascript: void(0)" data-toggle="modal" data-target="#deletemodal" class="btn btn-sm bg-danger-light delete_review_comment">
                                                 <i class="far fa-trash-alt"></i>
                                             </a>
                                         </td>
                                     </tr></tbody>
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