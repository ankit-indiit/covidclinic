@extends('frontend.layout.master')
@section('content')
@include('frontend.component.breadcrumb')
<section class="editprofile myaccount">
   <div class="container">
      <div class="card">
         <div class="card-header">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="basicinfo-tab" data-bs-toggle="tab" data-bs-target="#basicinfo" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-user-alt me-1"></i> Basic Info</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pwd-tab" data-bs-toggle="tab" data-bs-target="#pwd" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-lock-open me-1"></i> Change Password</button>
               </li>
            </ul>
         </div>
         <div class="card-body">
            <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="basicinfo" role="tabpanel" aria-labelledby="basicinfo-tab">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="user-profile text-center">
                           <div class="user-info">
                              <img src="{{ Auth::user()->image }}" id="userProfilePic">
                              <form  id="updateUserImage" enctype="multipart/form-data" method="post">
                                 @csrf
                                 <label for="userImage"><i class="fa fa-edit"></i></label>
                                 <input type="file" id="userImage" name="userImage" onChange="uploadFile();" style="display:none;">
                              </form>
                           </div>
                           <h2>{{ Auth::user()->first_name }}</h2>
                           <p>{{ Auth::user()->email }}</p>
                        </div>
                     </div>
                     <div class="col-md-9">
                        {{ Form::open(['url' => route('update-profile'), 'id' => 'updateProfileForm', 'class' => 'loginform']) }}
                           <div class="row ">
                                 <div class="col-md-12">
                                    <div class="form-group mb-3">
                                       {{ Form::label('facility', 'Facility') }}
                                       {{ Form::text('facility', Auth::user()->facility, ['class' => 'form-control', 'id' => '', 'placeholder' => 'Facility']) }}
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group mb-3">
                                       {{ Form::label('first_name', 'First Name') }}
                                       {{ Form::text('first_name', Auth::user()->first_name, ['class' => 'form-control', 'id' => '', 'placeholder' => 'User Name']) }}
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group mb-3">
                                       {{ Form::label('last_name', 'Last Name') }}
                                       {{ Form::text('last_name', Auth::user()->last_name, ['class' => 'form-control', 'id' => '', 'placeholder' => 'Last Name']) }}
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group mb-3">
                                       {{ Form::label('username', 'User Name') }}
                                       {{ Form::text('username', Auth::user()->username, ['class' => 'form-control', 'id' => '', 'placeholder' => 'User Name']) }}
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group mb-3">
                                       {{ Form::label('phone_number', 'Phone Number') }}
                                       {{ Form::text('phone_number', Auth::user()->phone_number, ['class' => 'form-control', 'id' => '', 'placeholder' => 'Phone Number']) }}
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group mb-3">
                                       {{ Form::label('email', 'Email Id') }}
                                       {{ Form::text('email', Auth::user()->email, ['class' => 'form-control', 'id' => '', 'placeholder' => 'Email Id', 'disabled' => 'disabled']) }}
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group mb-3">
                                       {{ Form::label('city', 'City') }}
                                       {{ Form::text('city', Auth::user()->city, ['class' => 'form-control', 'id' => '', 'placeholder' => 'City']) }}
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group mb-3">
                                       <label>State</label>
                                       <select class="form-control" placeholder="State">
                                         <option>Select</option>
                                         <option selected="">Florida</option>
                                         <option>Georgia</option>
                                         <option>Idaho</option>
                                       </select>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group mb-3">
                                       {{ Form::label('zip_code', 'Zipcode') }}
                                       {{ Form::text('zip_code', Auth::user()->zip_code, ['class' => 'form-control', 'id' => '', 'placeholder' => 'Zipcode']) }}
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group mb-3">
                                       {{ Form::label('address', 'Address') }}
                                       {{ Form::textarea('address', Auth::user()->address1, ['class' => 'form-control', 'rows' => '4', 'id' => '', 'placeholder' => 'Address']) }}
                                    </div>
                                 </div>                              
                              <div class="form-group">
                                 {{ Form::submit('Submit', ['class' => 'btn btn-submit', 'id' => 'updateProfileBtn']) }}
                              </div>                               
                           </div>
                        {{ Form::close() }} 
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pwd" role="tabpanel" aria-labelledby="pwd-tab">
                  <div class="row">
                     {{ Form::open(['url' => route('update-password'), 'id' => 'updatePasswordForm', 'class' => 'updatePassword']) }}
                        <div class="col-md-12 col-lg-8 offset-lg-2">
                           <div class="form-group mb-3">
                              {{ Form::label('password', 'Current Password') }}
                              {{ Form::password('password', ['class' => 'form-control', 'id' => '', 'placeholder' => 'Enter Your Current Password']) }}
                           </div>
                           <div class="form-group mb-3">
                              {{ Form::label('new_password', 'New Password') }}
                              {{ Form::password('new_password', ['class' => 'form-control', 'id' => 'newPassword', 'placeholder' => 'Enter Your New Password']) }}
                           </div>
                           <div class="form-group mb-3">
                              {{ Form::label('confirm_password', 'Confirm New Password') }}
                              {{ Form::password('confirm_password', ['class' => 'form-control', 'id' => '', 'placeholder' => 'Enter Your Confirm New Password']) }}
                           </div>
                           <div class="form-group">
                              {{ Form::submit('Submit', ['class' => 'btn btn-submit', 'id' => 'updatePasswordBtn']) }}
                           </div>
                        </div>
                     {{ Form::close() }}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
@section('customeScript')
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript">
   $("#updateProfileForm").validate({
      rules: {
         first_name: {
            required: true,
         },
         last_name: {
            required: true,
         },
         username: {
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
         state: {
            required: true,
         },
         zipcode: {
            required: true,
         },
         address: {
            required: true,
         }
      },
      messages: {
         first_name: "Please enter your first name",
         last_name: "Please enter your last name",
         username: "Please enter your username",
         zipcode: "Please enter your zipcode",
         phone_number: {
            required: "Please provide your phone number",
            number: "only numeric values are allowed"
         },
         city: "Please enter a city address",
      },
      submitHandler: function(form) {
         var serializedData = $(form).serialize();
         $("#err_mess").html('');
         $('#updateProfileBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
         $.ajax({
            headers: {
               'X-CSRF-Token': $('input[name="_token"]').val()
            },
            type: 'post',
            url: "{{ url('clinic/update-profile') }}",
            data: serializedData,
            dataType: 'json',
            success: function(data) {               
               $('#updateProfileBtn').html('Save Changes');
               if (data.success == true) {
                  swal("", data.message, "success", {
                     button: "close",
                  });
                  $('.swal2-confirm').on('click', function(){
                     window.location.reload();
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

   $("#updatePasswordForm").validate({
      rules: {
         password: {
            required: true,
         },
         new_password: {
            required: true,
            minlength: 5
         },
         confirm_password: {
            required: true,
            minlength: 5,
            equalTo: "#newPassword"
         }
      },
      messages: {
         password: "Please enter your current password",
         new_password: "Please enter your new password",
         confirm_password: "New password and confirm password must be matched",         
      },
      submitHandler: function(form) {
         var serializedData = $(form).serialize();
         $("#err_mess").html('');
         $('#updatePasswordBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
         $.ajax({
            headers: {
               'X-CSRF-Token': $('input[name="_token"]').val()
            },
            type: 'post',
            url: "{{ url('clinic/update-password') }}",
            data: serializedData,
            dataType: 'json',
            success: function(data) {
               $('#updatePasswordBtn').html('Save Changes');

               if (data.success == true) {
                  swal("", data.message, "success", {
                     button: "close",
                  });
                  $("#updatePasswordForm").trigger('reset');
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

   var _validFileExtensions = ['.jpg', 'png', 'jpeg', 'gif'];
   var validImageTypes = ['image/gif', 'image/jpeg', 'image/png', 'image/jpg'];

   function uploadFile() {
      var file = _("userImage").files[0];      
   
      if (!validImageTypes.includes(file.type)) {
         swal("", "Sorry, Uploaded file is invalid, allowed extensions are: " + _validFileExtensions.join(", "), "error", {
            button: "close",
         });         
         return false;
      }
   
      var formdata = new FormData();
      formdata.append("userImage", file);
      var ajax = new XMLHttpRequest();
      ajax.upload.addEventListener("progress", progressHandler, false);
      ajax.addEventListener("load", completeHandler, false);
      ajax.addEventListener("error", errorHandler, false);
      ajax.addEventListener("abort", abortHandler, false);
      ajax.open("POST", "{{ url('clinic/updateProfileImage') }}");
      ajax.setRequestHeader('X-CSRF-Token', $('input[name="_token"]').val());
      ajax.responseType = 'json';
      ajax.send(formdata); 
   }

   function progressHandler(event) {
      $('#progressBar').show();
      _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
      var percent = (event.loaded / event.total) * 100;
      _("progressBar").value = Math.round(percent);
   
      if (Math.round(percent) == '100' || Math.round(percent) == 100) {
         _("status").innerHTML = "File uploaded. We are generating report now...";
      } else {
         _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
      }
   
   }
   
   function completeHandler(event) {
      var src = _baseURL+'/images/user'+'/'+event.target.response.data;
      $('#progressBar').hide();
      $('#loaded_n_total').hide();
      if (event.target.response.img == '') {
         swal("", event.target.response.message, "error", {
            button: "close",
         });
      } else {
         $("#coverImageUpdate").attr("src", event.target.response.img);
         swal("", event.target.response.message, "success", {
            button: "close",
         });
         $('#userProfilePic').attr("src",src);
      }
   
      setTimeout(function() {
         $('#status').html("");
      }, 5000);
   
      _("progressBar").value = 0; //wil clear progress bar after successful upload
   }
   
   function errorHandler(event) {
      swal("", 'Upload Failed', "error", {
         button: "close",
      });
   }
   
   function abortHandler(event) {
      swal("", 'Upload Aborted', "error", {
         button: "close",
      });
   }
   
   function _(el) {
      return document.getElementById(el);
   }
   
   
   // function ValidateFileUpload(fileId, previewId) {
   //    var fuData = document.getElementById(fileId);
   //    var FileUploadPath = fuData.value;
   
   //    //To check if user upload any file
   //    if (FileUploadPath == '') {
   //       swal("", 'Please upload an image', "error", {
   //          button: "close",
   //       });
   
   //    } else {
   //       var Extension = FileUploadPath.substring(
   //          FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
   
   //       //The file uploaded is an image
   
   //       if (Extension == "gif" || Extension == "png" || Extension == "bmp" ||
   //          Extension == "jpeg" || Extension == "jpg") {
   
   //          // To Display
   //          if (fuData.files && fuData.files[0]) {
   //             var reader = new FileReader();
   
   //             reader.onload = function(e) {
   //                var output = document.getElementById(previewId);
   //                output.style.height = '150px';
   //                output.style.width = '150px';
   //                output.style.padding = '10px';
   //                output.src = e.target.result;
   //             }
   
   //             reader.readAsDataURL(fuData.files[0]);
   //          }
   
   //       }
   //       //The file upload is NOT an image
   //       else {
   //          swal("", 'Photo only allows file types of GIF, PNG, JPG, JPEG and BMP.', "error", {
   //             button: "close",
   //          });
   //       }
   //    }
   // }
</script>
@endsection