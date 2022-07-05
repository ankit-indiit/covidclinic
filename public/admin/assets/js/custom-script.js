$("#addUserForm").validate({
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
       gender: {
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
       password: {
          required: true,
       },
       confirm_password : {
            equalTo : '[name="password"]',
        },
    },
    messages: {
       first_name: "Please enter your first name",
       last_name: "Please enter your last name",
       username: "Please enter your username",
       email: "Please enter your email",
       dob: "Please enter your date of birth",
       gender: "Please enter your date of birth",
       zipcode: "Please enter your zipcode",
       phone_number: {
          required: "Please provide your phone number",
          number: "only numeric values are allowed"
       },
       city: "Please enter a city address",
       state: "Please enter state",
       address1: "Please enter address1",
       address2: "Please enter address2",
       password: "Please password",
    },
    submitHandler: function(form) {
      var serializedData = $(form).serialize();
      var role = $('#role').val();
       $("#err_mess").html('');
       $('#addUserFormBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
       $.ajax({
          headers: {
             'X-CSRF-Token': $('input[name="_token"]').val()
          },
          type: 'post',
          url: _baseURL+'/covid-admin/add-user',
          data: serializedData,
          dataType: 'json',
          success: function(data) {               
             $('#addUserFormBtn').html('Save Changes');
             if (data.success == true) {
                swal("", data.message, "success", {
                   button: "close",
                });
                $('.swal2-confirm').on('click', function(){
                   window.location.href = _baseURL+'/covid-admin/users/'+role;
                });
             } else {
                swal("", data.errors, "error", {
                   button: "close",
                });
             }


          }
       });
       return false;
    }
});

$("#updateUserForm").validate({
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
       gender: {
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
       
       confirm_password : {
            equalTo : '[name="password"]',
        },
    },
    messages: {
       first_name: "Please enter your first name",
       last_name: "Please enter your last name",
       username: "Please enter your username",
       email: "Please enter your email",
       dob: "Please enter your date of birth",
       gender: "Please enter your date of birth",
       zipcode: "Please enter your zipcode",
       phone_number: {
          required: "Please provide your phone number",
          number: "only numeric values are allowed"
       },
       city: "Please enter a city address",
       state: "Please enter state",
       address1: "Please enter address1",
       address2: "Please enter address2",
       password: "Please password",
    },
    submitHandler: function(form) {
      var serializedData = $(form).serialize();
      var role = $('#role').val();
       $("#err_mess").html('');
       $('#updateUserFormBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
       $.ajax({
          headers: {
             'X-CSRF-Token': $('input[name="_token"]').val()
          },
          type: 'post',
          url: _baseURL+'/covid-admin/update-user',
          data: serializedData,
          dataType: 'json',
          success: function(data) {               
             $('#updateUserFormBtn').html('Save Changes');
             if (data.success == true) {
                swal("", data.message, "success", {
                   button: "close",
                });
                $('.swal2-confirm').on('click', function(){
                   window.location.href = _baseURL+'/covid-admin/users/'+role;
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

$(document).on('click', '#deleteUser', function(){
	var userId = $(this).data('id');	
	var role = $(this).data('role');
	swal({
	    title: "Are you sure?",
        text: "You will not be able to recover this user!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
	}).then((result) => {
	    if (result == true) {
	    	deleteUser(userId, role)
	    } else {
	        swal("", "Cancelled!", "error", {
           		button: "close",
        	});
	    }
	});
});

function deleteUser(id, role) {
	$.ajax({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: _baseURL + "/covid-admin/delete-user",
        data: { 
        	id: id,
        	role: role,
        },
        dataType: 'json',
        success: function (data) {
            if (data.success == true) {
            	swal("", data.message, "success", {
               	button: "close",
            });
            $('.swal2-confirm').on('click', function(){
              	location.reload();
            });
         	} else {
            	swal("", data.message, "error", {
               		button: "close",
            	});
         	}
        }
    });
}

$("#updateAdminForm").validate({
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
       state: {
          required: true,
       },       
       zip_code: {
          required: true,
       },
       address1: {
          required: true,
       },
    },
    messages: {
       first_name: "Please enter your first name",
       last_name: "Please enter your last name",
       email: "Please enter your email",
       dob: "Please enter your date of birth",
       state: "Please enter your state",
       zip_code: "Please enter your zipcode",
       phone_number: {
          required: "Please provide your phone number",
          number: "only numeric values are allowed"
       },
       city: "Please enter a city address",
       state: "Please enter state",
       address1: "Please enter address",
    },
    submitHandler: function(form) {
      var serializedData = $(form).serialize();
      var role = $('#role').val();
       $("#err_mess").html('');
       $('#updateAdminFormBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
       $.ajax({
          headers: {
             'X-CSRF-Token': $('input[name="_token"]').val()
          },
          type: 'post',
          url: _baseURL+'/covid-admin/update-admin-profile',
          data: serializedData,
          dataType: 'json',
          success: function(data) {               
             if (data.success == true) {
                swal("", data.message, "success", {
                   button: "close",
                });
                $('#updateAdminFormBtn').html('Save Changes');
                $('.swal2-confirm').on('click', function(){
                   window.location.href = _baseURL+'/covid-admin/profile';
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

$("#updateAdminPasswordForm").validate({
    rules: {
       old_password: {
          required: true,
       },
       new_password: {
          required: true,
       },       
       confirm_password: {
        required: true,
        equalTo: '[name="new_password"]',
       }         
    },
    messages: {
       old_password: "Please enter your old password!",
       new_password: "Please enter your new password",
       confirm_password:{
        required: "Please enter your confirm password",
        equalTo: "Password and confirm password must be matched!"
       }
    },
    submitHandler: function(form) {
      var serializedData = $(form).serialize();
      var role = $('#role').val();
       $("#err_mess").html('');
       $('#updateAdminPasswordFormBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
       $.ajax({
          headers: {
             'X-CSRF-Token': $('input[name="_token"]').val()
          },
          type: 'post',
          url: _baseURL+'/covid-admin/update-admin-password',
          data: serializedData,
          dataType: 'json',
          success: function(data) {               
             if (data.success == true) {
                swal("", data.message, "success", {
                   button: "close",
                });
                $('#updateAdminPasswordFormBtn').html('Save Changes');
                $('.swal2-confirm').on('click', function(){
                   window.location.href = _baseURL+'/covid-admin/profile';
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


$("#addHomeForm").validate({
    
    submitHandler: function(form) {
      // var serializedData = $(form).serialize();
      var serializedData = new FormData(form);
       $("#err_mess").html('');
       $('#addHomeFormBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
       $.ajax({
          headers: {
             'X-CSRF-Token': $('input[name="_token"]').val()
          },
          type: 'post',
          url: _baseURL+'/covid-admin/home',
          data: serializedData,
          dataType: 'json',
          processData: false,
          contentType: false,
          cache: false,
          success: function(data) {               
             $('#addHomeFormBtn').html('Save Changes');
             if (data.success == true) {
                swal("", data.message, "success", {
                   button: "close",
                });
                $('.swal2-confirm').on('click', function(){
                   window.location.href = _baseURL+'/covid-admin/home/';
                });
             } else {
                swal("", data.errors, "error", {
                   button: "close",
                });
             }


          }
       });
       return false;
    }
});

$("#addAboutForm").validate({
    rules: {
       title: {
          required: true,
       },
       sub_title: {
          required: true,
       }, 
       description: {
          required: true,
       }, 
       description1: {
          required: true,
       },               
    },
    messages: {
       title: "Please enter title!",
       sub_title: "Please enter sub title",      
       description: "Please enter description",      
       description1: "Please enter description",      
    },
    submitHandler: function(form) {
      var serializedData = $(form).serialize();
       $("#err_mess").html('');
       $('#addAboutFormBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
       $.ajax({
          headers: {
             'X-CSRF-Token': $('input[name="_token"]').val()
          },
          type: 'post',
          url: _baseURL+'/covid-admin/about-us-data',
          data: serializedData,
          dataType: 'json',
          success: function(data) {               
             $('#addAboutFormBtn').html('Save Changes');
             if (data.success == true) {
                swal("", data.message, "success", {
                   button: "close",
                });
                $('.swal2-confirm').on('click', function(){
                   window.location.href = _baseURL+'/covid-admin/about-us/';
                });
             } else {
                swal("", data.errors, "error", {
                   button: "close",
                });
             }


          }
       });
       return false;
    }
});

$("#addContactForm").validate({
    
    submitHandler: function(form) {
      var serializedData = $(form).serialize();
       $("#err_mess").html('');
       $('#addContactFormBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
       $.ajax({
          headers: {
             'X-CSRF-Token': $('input[name="_token"]').val()
          },
          type: 'post',
          url: _baseURL+'/covid-admin/contact-us-data',
          data: serializedData,
          dataType: 'json',
          success: function(data) {               
             $('#addContactFormBtn').html('Save Changes');
             if (data.success == true) {
                swal("", data.message, "success", {
                   button: "close",
                });
                $('.swal2-confirm').on('click', function(){
                   window.location.href = _baseURL+'/covid-admin/contact-us-page/';
                });
             } else {
                swal("", data.errors, "error", {
                   button: "close",
                });
             }
          }
       });
       return false;
    }
});

$("#addNearestLocationForm").validate({
    rules: {
       title: {
          required: true,
       },
       address: {
          required: true,
       }, 
       working_hour: {
          required: true,
       },   
       mobile_no: {
          required: true,
       },
       location_image: {
          required: true,
       }, 
       link: {
          required: true,
       },                   
    },
    messages: {
       title: "Please enter title!",
       address: "Please enter address!",       
       working_hour: "Please enter working hour!",       
       mobile_no: "Please enter mobile number!",       
       location_image: "Please enter location image!",       
       link: "Please enter link!",       
    },
    submitHandler: function(form) {
      // var serializedData = $(form).serialize();
      var serializedData = new FormData(form);
       $("#err_mess").html('');
       $('#addNearestLocationFormBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
       $.ajax({
          headers: {
             'X-CSRF-Token': $('input[name="_token"]').val()
          },
          type: 'post',
          url: _baseURL+'/covid-admin/nearest-location',
          data: serializedData,
          dataType: 'json',
          processData: false,
          contentType: false,
          cache: false,
          success: function(data) {               
             $('#addNearestLocationFormBtn').html('Save Changes');
             if (data.success == true) {
                swal("", data.message, "success", {
                   button: "close",
                });
                $('.swal2-confirm').on('click', function(){
                   window.location.href = _baseURL+'/covid-admin/nearest-location/';
                });
             } else {
                swal("", data.errors, "error", {
                   button: "close",
                });
             }
          }
       });
       return false;
    }
});

$("#addLocationForm").validate({
    
    submitHandler: function(form) {
      var serializedData = new FormData(form);
       $("#err_mess").html('');
       $('#addLocationFormBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
       $.ajax({
          headers: {
             'X-CSRF-Token': $('input[name="_token"]').val()
          },
          type: 'post',
          url: _baseURL+'/covid-admin/nearest-location',
          data: serializedData,
          dataType: 'json',
          processData: false,
          contentType: false,
          cache: false,
          success: function(data) {               
             $('#addLocationFormBtn').html('Save Changes');
             if (data.success == true) {
                swal("", data.message, "success", {
                   button: "close",
                });
                $('.swal2-confirm').on('click', function(){
                   window.location.href = _baseURL+'/covid-admin/nearest-location/';
                });
             } else {
                swal("", data.errors, "error", {
                   button: "close",
                });
             }
          }
       });
       return false;
    }
});

$("#updateNearestLocationForm").validate({
    
    submitHandler: function(form) {
      // var serializedData = $(form).serialize();
      var id = $('#locationId').val();
      var serializedData = new FormData(form);
       $("#err_mess").html('');
       $('#updateNearestLocationFormBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
       $.ajax({
          headers: {
             'X-CSRF-Token': $('input[name="_token"]').val()
          },
          type: 'post',
          url: _baseURL+'/covid-admin/nearest-location'+'/'+id,
          data: serializedData,
          dataType: 'json',
          processData: false,
          contentType: false,
          cache: false,
          success: function(data) {               
             $('#updateNearestLocationFormBtn').html('Save Changes');
             if (data.success == true) {
                swal("", data.message, "success", {
                   button: "close",
                });
                $('.swal2-confirm').on('click', function(){
                   window.location.href = _baseURL+'/covid-admin/nearest-location';
                });
             } else {
                swal("", data.errors, "error", {
                   button: "close",
                });
             }
          }
       });
       return false;
    }
});

$(document).on('click', '#deleteLocation', function(){
  var locationId = $(this).data('id');
  swal({
      title: "Are you sure?",
        text: "You will not be able to recover this user!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
  }).then((result) => {
      if (result == true) {
        deleteLocation(locationId)
      } else {
          swal("", "Cancelled!", "error", {
              button: "close",
          });
      }
  });
});

function deleteLocation(id) {
  $.ajax({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'delete',
        url: _baseURL + "/covid-admin/nearest-location"+"/"+id,
        data: { 
          id: id,
        },
        dataType: 'json',
        success: function (data) {
            if (data.success == true) {
              swal("", data.message, "success", {
                button: "close",
            });
            $('.swal2-confirm').on('click', function(){
                location.reload();
            });
          } else {
              swal("", data.message, "error", {
                  button: "close",
              });
          }
        }
    });
}

$("#addFaqForm").validate({
    rules: {
      question: {
        required: true,
      },
      answer: {
        required: true,
      },           
    },
    messages: {
       question: "Please enter your question",
       answer: "Please enter your answer",
    },
    submitHandler: function(form) {
      var serializedData = $(form).serialize();
       $("#err_mess").html('');
       $('#addFaqFormBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
       $.ajax({
          headers: {
             'X-CSRF-Token': $('input[name="_token"]').val()
          },
          type: 'post',
          url: _baseURL+'/covid-admin/faq',
          data: serializedData,
          dataType: 'json',
          success: function(data) {               
             $('#addFaqFormBtn').html('Save Changes');
             if (data.success == true) {
                swal("", data.message, "success", {
                   button: "close",
                });
                $('.swal2-confirm').on('click', function(){
                   window.location.href = _baseURL+'/covid-admin/faq/';
                });
             } else {
                swal("", data.errors, "error", {
                   button: "close",
                });
             }
          }
       });
       return false;
    }
});

$("#updateFaqForm").validate({
    rules: {
      question: {
        required: true,
      },
      answer: {
        required: true,
      },           
    },
    messages: {
       question: "Please enter your question",
       answer: "Please enter your answer",
    },
    submitHandler: function(form) {
      var id = $('#editedFaqId').val();
      var serializedData = $(form).serialize();
       $("#err_mess").html('');
       $('#updateFaqFormBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
       $.ajax({
          headers: {
             'X-CSRF-Token': $('input[name="_token"]').val()
          },
          type: 'PATCH',
          url: _baseURL+'/covid-admin/faq/'+id,
          data: serializedData,
          dataType: 'json',
          success: function(data) {               
             $('#updateFaqFormBtn').html('Save Changes');
             if (data.success == true) {
                swal("", data.message, "success", {
                   button: "close",
                });
                $('.swal2-confirm').on('click', function(){
                   window.location.href = _baseURL+'/covid-admin/faq/';
                });
             } else {
                swal("", data.errors, "error", {
                   button: "close",
                });
             }
          }
       });
       return false;
    }
});

$(document).on('click', '#deleteFaq', function(){
  var id = $(this).data('id'); 
  swal({
    title: "Are you sure?",
    text: "You will not be able to recover this user!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result == true) {
      deleteFaq(id);
    } else {
      swal("", "Cancelled!", "error", {
          button: "close",
      });
    }
  });
});

function deleteFaq(id) {
  $.ajax({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'delete',
        url: _baseURL + "/covid-admin/faq"+"/"+id,
        data: { 
          id: id,
        },
        dataType: 'json',
        success: function (data) {
            if (data.success == true) {
              swal("", data.message, "success", {
                button: "close",
            });
            $('.swal2-confirm').on('click', function(){
                location.reload();
            });
          } else {
              swal("", data.message, "error", {
                  button: "close",
              });
          }
        }
    });
}

$(document).on('click', '#deleteSubscriber', function(){
  var id = $(this).data('id'); 
  swal({
    title: "Are you sure?",
    text: "You will not be able to recover this user!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result == true) {
      deleteSubscriber(id);
    } else {
      swal("", "Cancelled!", "error", {
          button: "close",
      });
    }
  });
});

function deleteSubscriber(id) {
  $.ajax({
    headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
    },
    type: 'post',
    url: _baseURL + "/covid-admin/delete-subscriber",
    data: { 
      id: id,
    },
    dataType: 'json',
    success: function (data) {
        if (data.success == true) {
          swal("", data.message, "success", {
            button: "close",
        });
        $('.swal2-confirm').on('click', function(){
            location.reload();
        });
      } else {
          swal("", data.message, "error", {
              button: "close",
          });
      }
    }
  });
}