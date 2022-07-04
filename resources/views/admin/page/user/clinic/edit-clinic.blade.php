@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <!-- Users -->
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Edit User</h4>
                        <a href="{{ route('users', 'clinic') }}" class="btn btn-default btnwhite">Back To Clinic</a>
                    </div>
                    <div class="card-body">
                        <div class="padBox">
                            <form action="{{ route('update-user') }}" id="updateUserForm" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h1>Basic Information</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>First Name</label>
                                          <input class="form-control" name="first_name" type="text" placeholder="Enter Name" value="{{ $editUser->first_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Last Name</label>
                                          <input class="form-control" name="last_name" type="text" placeholder="Enter Name" value="{{ $editUser->last_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Username</label>
                                          <input class="form-control" name="username" type="text" placeholder="Enter Name" value="{{ $editUser->username }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Email Address</label>
                                          <input class="form-control" type="email" name="email" placeholder="Enter Email Address" value="{{ $editUser->email }}" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Phone Number</label>
                                          <input class="form-control" type="text" name="phone_number" placeholder="Enter Phone Number" value="{{ $editUser->phone_number }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Date of Birth</label>
                                          <input class="form-control" type="date" name="dob" placeholder="Enter Date of Birth" value="{{ $editUser->dob }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Gender</label>
                                             <select class="form-control" name="gender" id="patientGender">
                                                <option>Select</option>
                                                <option {{ $editUser->gender == 'Male' ? 'selected' : '' }} value="Male">Male</option>
                                                <option {{ $editUser->gender == 'Female' ? 'selected' : '' }} value="Female">Female</option>
                                                <option {{ $editUser->gender == 'Unknown' ? 'selected' : '' }} value="Unknown">Unknown</option>
                                                <option {{ $editUser->gender == 'Notspecified' ? 'selected' : '' }} value="Notspecified">Notspecified</option>
                                             </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Address 1</label>
                                          <input class="form-control" type="text" name="address1" placeholder="Enter Address" value="{{ $editUser->address1 }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Address 2</label>
                                          <input class="form-control" type="text" name="address2" placeholder="Enter Address" value="{{ $editUser->address2 }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Town / City</label>
                                          <input class="form-control" name="city" type="text" placeholder="Enter Town / City" value="{{ $editUser->city }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>State</label>
                                          {!! getAllStates() !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Zip Code</label>
                                          <input class="form-control" type="text" name="zip_code" placeholder="Enter Zip Code" value="{{ $editUser->zip_code }}">
                                        </div>
                                    </div>                                    
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h1>Add Password</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>New Password</label>
                                          <input class="form-control" type="password" name="password" placeholder="Enter New Password" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Confirm New Password</label>
                                          <input class="form-control" type="password" name="confirm_password" placeholder="Enter Confirm New Password" value="">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="role" id="role" value="clinic">
                                <input type="hidden" name="id" id="id" value="{{ $editUser->id }}">
                                <div class="mt-2">
                                  <button class="btn btn-primary" id="addUserFormBtn" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Users -->
        </div>
    </div>
</div>
@endsection