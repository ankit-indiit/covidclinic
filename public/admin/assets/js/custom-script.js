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

$("#addHomeForm").validate({
    rules: {
       title: {
          required: true,
       },
       description: {
          required: true,
       },
    },
    messages: {
       title: "Please enter your title",
       description: "Please enter your description",
    },
    submitHandler: function(form) {
      var serializedData = $(form).serialize();
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