@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <!-- Users -->
            <div class="col-md-12">
                <div class="card card-table">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Add Patient User</h4>
                        <a href="{{ route('users', 'patient') }}" class="btn btn-default btnwhite">Back To Users</a>
                    </div>
                    <div class="card-body">
                        <div class="padBox">
                            <form action="{{ route('add-user') }}" id="addUserForm" method="post">
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
                                          <input class="form-control" name="first_name" type="text" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Last Name</label>
                                          <input class="form-control" name="last_name" type="text" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Username</label>
                                          <input class="form-control" name="username" type="text" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Email Address</label>
                                          <input class="form-control" type="email" name="email" placeholder="Enter Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Phone Number</label>
                                          <input class="form-control" type="text" name="phone_number" placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Date of Birth</label>
                                          <input class="form-control" type="date" name="dob" placeholder="Enter Date of Birth">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Gender</label>
                                             <select class="form-control" name="gender" id="patientGender">
                                                <option>Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Unknown">Unknown</option>
                                                <option value="Notspecified">Notspecified</option>
                                             </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Address 1</label>
                                          <input class="form-control" type="text" name="adress1" placeholder="Enter Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Address 2</label>
                                          <input class="form-control" type="text" name="adress2" placeholder="Enter Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Town / City</label>
                                          <input class="form-control" name="city" type="text" placeholder="Enter Town / City">
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
                                          <input class="form-control" type="text" name="zip_" placeholder="Enter Zip Code">
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
                                          <input class="form-control" type="password" name="password" placeholder="Enter New Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Confirm New Password</label>
                                          <input class="form-control" type="password" name="confirm_password" placeholder="Enter Confirm New Password">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="role" id="role" value="patient">
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