@extends('layouts.profile')
  @section('user-content') 
    <div class="container-fluid pt-5 mx-auto">
        <div class="bg-white shadow rounded-lg d-block d-sm-flex">
            
            <div class="profile-tab-nav border-right">
                <div class="p-4">
                    <div class="img-circle text-center mb-3">
                        <img src="{{ asset('user.webp') }}" alt="Image" class="shadow">
                    </div>
                    <h4 class="text-center">{{ Auth::user()->firstname }}&nbsp;{{ Auth::user()->lastname }}</h4>
                </div>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
                        <i class="fa fa-home text-center mr-1"></i> 
                        Account
                    </a>
                    <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
                        <i class="fa fa-key text-center mr-1"></i> 
                        Password
                    </a>
                    <a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
                        <i class="fa fa-user text-center mr-1"></i> 
                        Appointments
                    </a>
                    <a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false">
                        <i class="fa fa-tv text-center mr-1"></i> 
                        Application
                    </a>
                    <a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
                        <i class="fa fa-bell text-center mr-1"></i> 
                        Notification
                    </a> 
                </div>
            </div>
            <div class="tab-content p-4 p-my-5" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                    <h3 class="mb-4">Account Settings</h3>
                    <form action="{{ route('updateProfile') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                  <label>First Name</label>
                                  <input type="text" name="firstname" class="form-control" value="{{ $loginUser->firstname }}" required>
                            </div>
                            <div class="invalid-feedback">
                                Missing or invalid format.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                  <label>Last Name</label>
                                  <input type="text" name="lastname" class="form-control" value="{{ $loginUser->lastname }}"required>
                            </div>
                            <div class="invalid-feedback">
                                Missing or invalid format.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                  <label>Email</label>
                                  <input type="text" name="email" class="form-control" value="{{ $loginUser->email }}"required>
                            </div>
                            <div class="invalid-feedback">
                                Missing or invalid format.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                  <label>Phone number</label>
                                  <input type="text" name="contact1" class="form-control" value="{{ $loginUser->contact1 }}"required>
                            </div>
                            <div class="invalid-feedback">
                                Missing or invalid format.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                  <label>Birthdate</label>
                                  <input type="date" name="birthdate" class="form-control" value="{{ $loginUser->birthdate }}" required>
                            </div>
                            <div class="invalid-feedback">
                                Missing or invalid format.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                  <label>Address</label>
                                  <input type="text" name="address" class="form-control" value="{{ $loginUser->address }}" required>
                            </div>
                            <div class="invalid-feedback">
                                Missing or invalid format.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                  <label>City</label>
                                  <input type="text" name="city" class="form-control" value="{{ $loginUser->city }}" required>
                            </div>
                            <div class="invalid-feedback">
                                Missing or invalid format.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                  <label>Zip Code</label>
                                  <input type="text" name="zip" class="form-control" value="{{ $loginUser->zip }}" required>
                            </div>
                            <div class="invalid-feedback">
                                Missing or invalid format.
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <button class="btn btn-primary">Update</button>
                        <button class="btn btn-light">Cancel</button>
                    </div>
                </form>
                </div>
                
                <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab"> 
                    <h3 class="mb-4">Password Settings</h3>
                    <form action="{{ route('change-password') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Old password</label>
                                    <input type="password" name="current_password" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New password</label>
                                    <input type="password" name="password" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Confirm new password</label>
                                    <input type="password" name="password_confirmation" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div>
                            @if (session('message'))
                    <h5 class="alert alert-success mb-2">{{ session('message') }}</h5>
                @endif

                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                            <button class="btn btn-primary">Update</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </form>
                    
                </div>
                <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                    <h3 class="mb-4">Appointments Booked Online</h3>
                    <div class="row">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table"></i>
                                Online Booking
                            </div>
                            <div class="card-body px-auto text-nowrap">
                                <table id="datatablesSimple" class="table-responsive" style="overflow-x:scroll;">
                                    
                                    <thead>
                                        <tr>
                                            <th>Service Booked</th>
                                            <th>Appointment Sched</th>
                                            <th>Client Notes</th>
                                            <th>Admin Note</th>
                                            <th>Booking Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Service Booked</th>
                                            <th>Appointment Sched</th>
                                            <th>Client Notes</th>
                                            <th>Admin Note</th>
                                            <th>Booking Date</th>
                                            <th>Status</th>
                                            
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($books as $book)
                                        <tr>
                                            <td>{{ $book->service }}</td>
                                            <td>{{ $book->date_and_time }}</td>
                                            <td>{{ $book->notes }}</td>
                                            <td>{{ $book->admin_notes }}</td>
                                            <td>{{ $book->created_at }}</td>
                                            <td>{{ $book->status }}</td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
                    <h3 class="mb-4">Applications for adoption</h3>
                    <div class="row">
                        <div class="card mb-4">
                            <div class="card-header px-auto">
                                <i class="fas fa-table"></i>
                                Online Application
                            </div>
                            <div class="card-body px-auto text-nowrap">
                                <table id="datatablesSimple1" class="table-responsive-lg">
                                    
                                    <thead>
                                        <tr>
                                            <th>Pet ID</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Admin Note</th>
                                            <th>Application Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Pet ID</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Admin Note</th>
                                            <th>Application Date</th>
                                            <th>Status</th>
                                            
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($adopts as $adopt)
                                        <tr>
                                            <td> {{ $adopt->pet_id }} </td>
                                            <td> {{ $adopt->pet->name }} </td>
                                            <td> {{ $adopt->pet->age }} </td>
                                            <td> {{ $adopt->notes }} </td>
                                            <td> {{ $adopt->created_at }} </td>
                                            <td> {{ $adopt->status }} </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                    <h3 class="mb-4">Notification Settings</h3>
                    
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        (() => {
          'use strict'
        
          const forms = document.querySelectorAll('.needs-validation')
        
          Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }
        
              form.classList.add('was-validated')
            }, false)
          })
        })()
        </script>
@endsection

