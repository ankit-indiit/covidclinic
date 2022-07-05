@extends('frontend.layout.master')
@section('content')
@include('frontend.component.breadcrumb', [
  'title' => 'Patients',
  'home' => route('home'),
])
<section class="editprofile myaccount">
   <div class="container">
      <div class="card clinic_patient">
         <div class="card-header">
            <div class="row align-items-center">
               <div class="col-md-6 col-sm-6">
                  <h2>All Patients</h2>
               </div>
               <div class="col-md-6 text-sm-end  col-sm-6">
                  <a class="btn btn-submit" href="{{ route('clinic-patient') }}">Add Patient</a>
               </div>
            </div>
         </div>
         <div class="card-body">
            <div class="tablescroll mCustomScrollbar _mCS_2" style="position: relative;">
               <div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_horizontal mCSB_outside" tabindex="0" style="max-height: none;">
                  <div id="mCSB_2_container" class="mCSB_container" style="position: relative; top: 0px;  min-width: 100%; overflow-x: inherit;" dir="ltr">
                     <div class="mCustomScrollbar _mCS_1" data-mcs-theme="dark">
                        <div id="mCSB_1" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                           <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                              <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                 <div class="row">
                                    <div class="col-sm-12">                                        
                                       {!! $dataTable->table() !!}
                                    </div>
                                 </div>                                
                              </div>
                           </div>
                           <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark mCSB_scrollTools_vertical" style="display: none;">
                              <div class="mCSB_draggerContainer">
                                 <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;">
                                    <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                    <div class="mCSB_draggerRail"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="mCSB_2_scrollbar_horizontal" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_horizontal" style="display: block;">
                  <div class="mCSB_draggerContainer">
                     <div id="mCSB_2_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 30px; display: block; width: 1050px; max-width: 1056px; left: 16px;">
                        <div class="mCSB_dragger_bar"></div>
                        <div class="mCSB_draggerRail"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
@section('customScript')
{{-- <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script> --}}
{!! $dataTable->scripts() !!} 
<script type="text/javascript">
</script>
@endsection