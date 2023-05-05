@extends('layouts.master')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Client Appointments</li>
    </ol>
    <div class="row">
        {{--message--}}
        @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ session()->get('message') }} 
        @endif
        </div>
        <div class="card mb-4 px-auto">
            <div class="card-header px-auto">
                <i class="fas fa-table"></i>
                Applications
            </div>
            <div class="card-body px-auto text-nowrap">
                <table id="datatablesSimple" class="table-responsive-lg">
                    
                    <thead>
                        <tr>
                            <th>Appointment ID</th>
                            <th>Client ID</th>
                            <th>Client's Firstname</th>
                            <th>Client's Lastname</th>
                            <th>Client's Email</th>
                            <th>Service Booked</th>
                            <th>Date and time of Appointment</th>
                            <th>Client Notes</th>
                            <th>Admin Note</th>
                            <th>Application Date</th>
                            <th>Status</th>
                            <th>&nbsp;</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Appointment ID</th>
                            <th>>Client ID</th>
                            <th>Client's Firstname</th>
                            <th>Client's Lastname</th>
                            <th>Client's Email</th>
                            <th>Service Booked</th>
                            <th>Date and time of Appointment</th>
                            <th>Client Notes</th>
                            <th>Admin Note</th>
                            <th>Application Date</th>
                            <th>Status</th>
                            <th>&nbsp;</th>
                            
                            
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        @foreach ($bookings['sched'] as $booking)
                        <tr>
                       
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->user->id }}</td>
                        <td>{{ $booking->user->firstname }}</td>
                        <td>{{ $booking->user->lastname }}</td>
                        <td>{{ $booking->user->email }}</td>
                        <td>{{ $booking->service }}</td>
                        <td>{{ $booking->date_and_time }}</td>
                        <td>{{ $booking->notes }}</td>
                        <td>{{ $booking->admin_notes }}</td>
                        <td>{{ $booking->created_at }}</td>
                        <td>{{ $booking->status }}</td>
                        <td><button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalUpdateBooking{{$booking->id}}"><i class="fa-solid fa-pen"></i></button>
                        </td>    
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.modal-updatebooking')
    @endsection
