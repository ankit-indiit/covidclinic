@extends('frontend.layout.master')
@section('content')
@include('frontend.component.breadcrumb')
<section class="editprofile myaccount">
   <div class="container">
      <div class="card">
         <div class="card-header">
            <div class="row align-items-center">
               <div class="col-md-6 col-sm-6">
                  <h2>Edit Patient</h2>
               </div>
               <div class="col-md-6 text-sm-end  col-sm-6">
                  <a class="btn btn-submit" href="{{ route('patients') }}">Back To Patients</a>
               </div>
            </div>
         </div>
         <div class="card-body">            
            {{ Form::open(['url' => route('update-patient'), 'id' => 'updatePatientForm', 'class' => '']) }}
            <div class="row">
              <div class="col-md-6 col-lg-6 col-sm-6">
                <div class="form-group mb-3">
                  {{ Form::label('first_name', 'First Name') }}
                   {{ Form::text('first_name', $patientDetail->first_name, ['class' => 'form-control', 'id' => '', 'placeholder' => 'User Name']) }}
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-6">
                <div class="form-group mb-3">
                  {{ Form::label('last_name', 'Last Name') }}
                   {{ Form::text('last_name', $patientDetail->last_name, ['class' => 'form-control', 'id' => '', 'placeholder' => 'User Name']) }}
                </div>
              </div>
              <div class="col-md-6 col-lg-4 col-sm-6">
                <div class="form-group mb-3">
                  {{ Form::label('dob', 'Date of Birth') }}
                   {{ Form::date('dob', $patientDetail->dob, ['class' => 'form-control', 'id' => '']) }}
                </div>
              </div>             
                <div class="col-md-6 col-lg-4 col-sm-6">
                  <div class="form-group mb-3">
                     <label>Gender</label>
                     <select class="form-control" name="gender" id="patientGender">
                        <option>Select</option>
                        <option {{ $patientDetail->gender == 'Male' ? 'selected' : '' }} value="Male">Male</option>
                        <option {{ $patientDetail->gender == 'Female' ? 'selected' : '' }} value="Female">Female</option>
                        <option {{ $patientDetail->gender == 'Unknown' ? 'selected' : '' }} value="Unknown">Unknown</option>
                        <option {{ $patientDetail->gender == 'Notspecified' ? 'selected' : '' }} value="Notspecified">Notspecified</option>
                     </select>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6">
                  <div class="form-group mb-3">
                    {{ Form::label('mrn', 'MRN') }}
                     {{ Form::text('mrn', $patientDetail->mrn, ['class' => 'form-control', 'id' => '', 'placeholder' => 'MRN']) }}
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6">
                  <div class="form-group mb-3">
                    {{ Form::label('email', 'Email') }}
                     {{ Form::email('email', $patientDetail->email, ['class' => 'form-control', 'id' => '', 'placeholder' => 'Email']) }}
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6">
                  <div class="form-group mb-3">
                    {{ Form::label('phone_number', 'Phone Number') }}
                    {{ Form::number('phone_number', $patientDetail->phone_number, ['class' => 'form-control', 'id' => '', 'placeholder' => 'Phone Number']) }}
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6">
                  <div class="form-group mb-3">
                    {{ Form::label('address1', 'Address Line 1') }}
                    {{ Form::text('address1', $patientDetail->address1, ['class' => 'form-control', 'id' => '', 'placeholder' => 'Address 1']) }}
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6">
                  <div class="form-group mb-3">
                    {{ Form::label('address2', 'Address Line 2') }}
                    {{ Form::text('address2', $patientDetail->address2, ['class' => 'form-control', 'id' => '', 'placeholder' => 'Address 2']) }}
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6">
                  <div class="form-group mb-3">
                    {{ Form::label('city', 'City') }}
                    {{ Form::text('city', $patientDetail->city, ['class' => 'form-control', 'id' => '', 'placeholder' => 'City']) }}
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6">
                  <div class="form-group mb-3">
                     <label>State</label>
                     {!! getAllStates() !!}
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6">
                  <div class="form-group mb-3">
                    {{ Form::label('zip_code', 'Zipcode') }}
                    {{ Form::text('zip_code', $patientDetail->zip_code, ['class' => 'form-control', 'id' => '', 'placeholder' => 'Zipcode']) }}
                  </div>
                </div>               
                <div class="col-md-6 col-lg-4 col-sm-6">
                  <div class="form-group mb-3">
                     <label>What is your ethnicity? </label>
                     <select class="form-control" name="ethnicity">
                        @foreach($patientEthnicites as $patientEthnicity)
                          <option {{ $patientDetail->ethnicity == $patientEthnicity->name ? 'selected' : '' }} value="{{ $patientEthnicity->name }}">{{ $patientEthnicity->name }}</option>
                        @endforeach
                     </select>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6">
                  <div class="form-group mb-3">
                     <label>Payment Status</label>
                     <select class="form-control" name="payment_status">
                        <option>Select</option>
                        @foreach($paymentStatuses as $paymentStatus)
                          <option {{ $patientDetail->payment_status == $paymentStatus->name ? 'selected' : '' }} value="{{ $paymentStatus->name }}">{{ $paymentStatus->name }}</option>
                        @endforeach
                     </select>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6">
                  <div class="form-group mb-3">
                    {{ Form::label('passport', 'Passport') }}
                    {{ Form::text('passport', $patientDetail->passport, ['class' => 'form-control', 'id' => '', 'placeholder' => 'Passport']) }}
                  </div>
                </div>
                <div class="col-md-8 col-lg-8 col-sm-6">
                  <div class="form-group mb-3">
                    {{ Form::label('custom_info', 'Custom Info') }}
                    {{ Form::text('custom_info', $patientDetail->custom_info, ['class' => 'form-control', 'id' => '', 'placeholder' => 'Custom Info']) }}
                  </div>
                </div>                
               <div class="col-md-6 col-lg-4 col-sm-6 d-none" id="pregnancy">
                  <div class="checkbox-group mt-40 mb-3">
                     <input type="checkbox" style="display:none" id="checkbox1" name="pregnancy" {{ $patientDetail->pregnancy == 1 ? 'checked' : '' }}>
                     <label for="checkbox1">Pregnancy</label>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 col-sm-6">
                  <div class="form-group mb-2">
                     <label>What is your race?</label>
                  </div>
                  @foreach($patientRaces as $patientRace)
                    <div class="radio-group mb-2">
                       <input type="radio" style="display:none" id="race{{ $patientRace->id }}" name="race" value="{{ $patientRace->id }}" {{ $patientDetail->race == $patientRace->id ? 'checked' : '' }}>
                       <label for="race{{ $patientRace->id }}">{{ $patientRace->name }}</label>
                    </div>
                  @endforeach                  
               </div>
               <div class="col-md-6 col-lg-4 col-sm-6">
                  <div class="form-group mb-2">
                     <label>Symptoms</label>
                  </div>                  
                  @foreach($patientSymptoms as $patientSymptom)
                    <div class="checkbox-group mb-2">
                       <input type="checkbox" style="display:none" id="symptom{{ $patientSymptom->id }}" name="symptom[]" class="patientSymptom" value="{{ $patientSymptom->id }}" @if (in_array($patientSymptom->id, $patientDetail->symptom)) checked @endif>
                       <label for="symptom{{ $patientSymptom->id }}">{{ $patientSymptom->name }}</label>
                    </div>
                  @endforeach                   
               </div>
               <input type="hidden" name="patientId"  value="{{ $patientDetail->id }}">
            </div>
         </div>         
          <div class="card-footer text-end">
            {{ Form::submit('Update', ['class' => 'btn btn-submit', 'id' => 'updatePatientFormBtn']) }}
          </div>          
          {{ Form::close() }}
      </div>
   </div>
</section>
@endsection
@section('customScript')
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript">
  $("#updatePatientForm").validate({
    rules: {
       first_name: {
          required: true,
       },
       last_name: {
          required: true,
       },
       dob: {
          required: true,
       },
       phone_number: {
          required: true,
          number: true
       },            
       email: {
          required: true,
          email: true
       },
       city: {
          required: true,
       },
       mrn: {
          required: true,
       },
       zipcode: {
          required: true,
       },
       address1: {
          required: true,
       },
       address2: {
          required: true,
       },
       ethnicity: {
          required: true,
       },
       custom_info: {
          required: true,
       },
       payment_status: {
          required: true,
       },
       passport: {
          required: true,
       },
       race: {
          required: true,
       },
       symptom: {
          required: true,
       }
    },
    messages: {
       first_name: "Please enter your first name",
       last_name: "Please enter your last name",
       dob: "Please enter your username",
       zipcode: "Please enter your zipcode",
       phone_number: {
          required: "Please provide your phone number",
          number: "only numeric values are allowed"
       },
       city: "Please enter a city address",
       state: "Please enter state",
       address1: "Please enter address1",
       address2: "Please enter address2",
       custom_info: "Please enter custom info",
       payment_status: "Please select payment status",
       Passport: "Please passport",
       ethnicity: "Please select ethnicity",
       race: "Please select race",
       symptom: "Please select symptom",
    },
    submitHandler: function(form) {
      var patientId = $('#patientId').val();
      var serializedData = $(form).serialize();
       $("#err_mess").html('');
       $('#updatePatientFormBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
       $.ajax({
          headers: {
             'X-CSRF-Token': $('input[name="_token"]').val()
          },
          type: 'post',
          url: "{{ url('clinic/update-patient/') }}",
          data: serializedData,
          dataType: 'json',
          success: function(data) {               
             $('#updatePatientFormBtn').html('Save Changes');
             if (data.success == true) {
                swal("", data.message, "success", {
                   button: "close",
                });
                $('.swal2-confirm').on('click', function(){
                   window.location.href = _baseURL+'/clinic/patients';
                });
             } else {
                swal("", data.message, "error", {
                   button: "close",
                });
             }


          }
       });
       return false;
    }
  });

  $(document).on('change', '#patientGender', function(){
    if ($(this).val() == 'Female') {
      $('#pregnancy').removeClass('d-none');
    } else {
      $('#pregnancy').addClass('d-none');
    }
  });
</script>
@endsection