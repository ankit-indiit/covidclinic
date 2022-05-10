@extends('admin.layout.master')
@section('content')
<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">Profile</h3>
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                  <li class="breadcrumb-item active">Profile</li>
               </ul>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="profile-header">
               <div class="row align-items-center">
                  <div class="col-auto profile-image">
                     <a href="#">
                     <img class="rounded-circle" alt="User Image" src="{{ $user->image }}">
                     </a>
                  </div>
                  <div class="col ml-md-n2 profile-user-info">
                     <h4 class="user-name mb-0">{{ $user->first_name }} {{ $user->last_name }}</h4 >
                     <h6 class="text-muted">UI/UX Design Team</h6>
                     <div class="user-Location"><i class="fas fa-map-marker-alt"></i> {{ $user->address1 }}</div>
                     <div class="about-text">{{ $user->address2 }}</div>
                  </div>
                  <div class="col-auto profile-btn">
                     <a href="" class="btn btn-primary">
                     Message
                     </a>
                     <a href="" class="btn btn-primary">
                     Edit
                     </a>
                  </div>
               </div>
            </div>
            <div class="profile-menu">
               <ul class="nav nav-tabs nav-tabs-solid">
                  <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
                  </li>
               </ul>
            </div>
            <div class="tab-content profile-tab-cont">
               <div class="tab-pane fade show active" id="per_details_tab">
                  <div class="row">
                     <div class="col-lg-9">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title d-flex justify-content-between">
                                 <span>Personal Details</span>
                                 <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="far fa-edit mr-1"></i>Edit</a>
                              </h5>
                              <div class="row">
                                 <p class="col-sm-3 text-muted text-end mb-0 mb-sm-3">Name</p>
                                 <p class="col-sm-9">{{ $user->first_name }} {{ $user->last_name }}</p>
                              </div>
                              <div class="row">
                                 <p class="col-sm-3 text-muted text-end mb-0 mb-sm-3">Date of Birth</p>
                                 <p class="col-sm-9">{{ $user->dob }}</p>
                              </div>
                              <div class="row">
                                 <p class="col-sm-3 text-muted text-end mb-0 mb-sm-3">Email ID</p>
                                 <p class="col-sm-9">{{ $user->email }}</p>
                              </div>
                              <div class="row">
                                 <p class="col-sm-3 text-muted text-end mb-0 mb-sm-3">Mobile</p>
                                 <p class="col-sm-9">{{ $user->phone_number }}</p>
                              </div>
                              <div class="row">
                                 <p class="col-sm-3 text-muted text-end mb-0">Address</p>
                                 <p class="col-sm-9 mb-0">{{ $user->address1 }}<br>
                                    {{ $user->address2 }}
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
                           <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title">Personal Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <form>
                                       <div class="row form-row">
                                          <div class="col-12 col-sm-6">
                                             <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" value="{{ $user->first_name }}">
                                             </div>
                                          </div>
                                          <div class="col-12 col-sm-6">
                                             <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" value="{{ $user->last_name }}">
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="form-group">
                                                <label>Date of Birth</label>
                                                <div class="cal-icon">
                                                   <input type="text" class="form-control" value="{{ $user->dob }}">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12 col-sm-6">
                                             <div class="form-group">
                                                <label>Email ID</label>
                                                <input type="email" class="form-control" value="{{ $user->email }}">
                                             </div>
                                          </div>
                                          <div class="col-12 col-sm-6">
                                             <div class="form-group">
                                                <label>Mobile</label>
                                                <input type="text" value="{{ $user->phone_number }}" class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <h5 class="form-title"><span>Address</span></h5>
                                          </div>
                                          <div class="col-12">
                                             <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" value="{{ $user->address1 }} Agriculture Lane">
                                             </div>
                                          </div>
                                          <div class="col-12 col-sm-6">
                                             <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" value="Miami">
                                             </div>
                                          </div>
                                          <div class="col-12 col-sm-6">
                                             <div class="form-group">
                                                <label>State</label>
                                                <input type="text" class="form-control" value="Florida">
                                             </div>
                                          </div>
                                          <div class="col-12 col-sm-6">
                                             <div class="form-group">
                                                <label>Zip Code</label>
                                                <input type="text" class="form-control" value="22434">
                                             </div>
                                          </div>
                                          <div class="col-12 col-sm-6">
                                             <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" value="United States">
                                             </div>
                                          </div>
                                       </div>
                                       <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title d-flex justify-content-between">
                                 <span>Account Status</span>
                                 <a class="edit-link" href="#"><i class="far fa-edit mr-1"></i> Edit</a>
                              </h5>
                              <button class="btn btn-success" type="button"><i class="fas fa-certificate"></i> Active</button>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title d-flex justify-content-between">
                                 <span>Skills </span>
                                 <a class="edit-link" href="#"><i class="far fa-edit mr-1"></i> Edit</a>
                              </h5>
                              <div class="skill-tags">
                                 <span>Html5</span>
                                 <span>CSS3</span>
                                 <span>WordPress</span>
                                 <span>Javascript</span>
                                 <span>Android</span>
                                 <span>iOS</span>
                                 <span>Angular</span>
                                 <span>PHP</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="password_tab" class="tab-pane fade">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">Change Password</h5>
                        <div class="row">
                           <div class="col-md-10 col-lg-6">
                              <form>
                                 <div class="form-group">
                                    <label>Old Password</label>
                                    <input type="password" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control">
                                 </div>
                                 <button class="btn btn-primary" type="submit">Save Changes</button>
                              </form>
                           </div>
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