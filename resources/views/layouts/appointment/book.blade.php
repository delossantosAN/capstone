@extends('layouts.app')
@section('content')
<style>
    body{
	width: 100%;
	height:100%;
	overflow: hidden;
	background-image: url(../images/background.jpg);
}
.inner-layer{
	position: absolute;
	width: 100%;
	height:100%;
	background-color: rgba(0,147,173,0.7);
	overflow: auto;
}
.form-data{
	margin-top: 21%;
	background-color: #FFF;
	
}
.form-body{
	padding: 20px;
}
.form-head{
	padding: 10px;
	border-bottom: 1px solid #CCC;
}
.form-head h2{
	font-size: 22px;
	font-weight: 600;
}
.no-margin{
	margin: 0px;
}

.form-row{
	margin-bottom: 15px;
}
.form-control{
	background-color: #f7f7ff;
	border-radius: 0px;

}
.form-control:focus{
	box-shadow: none;
	border: 3px solid #138496;
}
.btn-appointment{
	background-color: #138496 !important;
	border-color: #138496 !important;
	width: 100%;
}
.content{
	margin-top: 15%;
	text-align: center;
	color: #FFF;
	padding: 30px;
}
.content h1{
	font-weight: 600;
	font-size: 3.5rem;
}
.content h2{
	font-weight: 600;
	font-size:2.5rem;
	margin-top: 20px;
}
.content p{
	font-size: 22px;
	margin-top: 20px;
}
.datepicker td, .datepicker th{
	padding: 5px;
}
.dropdown-menu.datepicker{
	max-width: 300px !important;
}


@media screen and (max-width: 976px){
	
}
</style>

<div class="inner-layer">
    <div class="container">
      <div class="row no-margin">
          <div class="col-sm-6">
              <div class="content">
                  <h1>Book You Slot Now and Save your time</h1>
                  <p>Book appointments effortlessly with just a few clicks. </p>
                  <h2>For Help Call : +63 920 3358 822</h2>
              </div>
          </div>
          <div class="col-sm-6">
              <div class="form-data">
                  <div class="form-head py-3">
                      <h2>Book Appointment</h2>
                  </div>
                  <div class="form-body">
                      <div class="row form-row">
                        <form method="POST" action="{{ route('book-appointment')}}">
                        @csrf
                        <select name="service"  class="form-select form-control" aria-label="Default select example" required>
                            <option value="Grooming">Grooming</option>
                            <option value="Regular Consultation">Regular Consultation</option>
                            <option value="Vaccination">Vaccination</option>
                        
                          </select>
                      </div>
                      <div class="row form-row">
                        <input type="datetime-local" name="date" placeholder="Enter Mobile Date of Appointment" class="form-control" required>
                      </div>
                       <div class="row form-row">
                        <input type="text" name="notes" placeholder="Add some notes" class="form-control" required>
                        <input type="hidden" name="status" value="pending">
                        <input type="hidden" name="admin_notes" value="booking for review">
                        <input type="hidden" name="user_id" value={{ Auth::user()->id }}>
                      </div>

                       <div class="row form-row">
                         <button class="btn btn-success btn-appointment" type="submit">
                           Book Appointment
                         </button>
                         
                      </div>
                    </form>

                  </div>
              </div>
          </div>
      </div>
    </div>
</div>
<script>

  </script>
@endsection