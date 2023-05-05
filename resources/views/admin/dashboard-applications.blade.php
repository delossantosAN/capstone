@extends('layouts.master')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Client Application for Adoption</li>
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
                            <th>Application ID</th>
                            <th>Applicant's Firstname</th>
                            <th>Applicant's Lastname</th>
                            <th>Pet Adoptee ID</th>
                            <th>Image</th>
                            <th>Pet Adoptee Name</th>
                            <th>Pet Adoptee Age</th>
                            <th>Applicant's Contact Number</th>
                            <th>Email Address</th>
                            <th>Notes</th>
                            <th>Application Date</th>
                            <th>Status</th>
                            <th>&nbsp;</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Application ID</th>
                            <th>Applicant's Firstname</th>
                            <th>Applicant's Lastname</th>
                            <th>Pet Adoptee ID</th>
                            <th>Image</th>
                            <th>Pet Adoptee Name</th>
                            <th>Pet Adoptee Age</th>
                            <th>Applicant's Contact Number</th>
                            <th>Email Address</th>
                            <th>Notes</th>
                            <th>Status</th>
                            <th>&nbsp;</th>
                            
                            
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        @foreach ($applications['status'] as $application)
                        <tr>
                       
                        <td>{{ $application->id }}</td>
                        <td>{{ $application->user->firstname }}</td>
                        <td>{{ $application->user->lastname }}</td>
                        <td>{{ $application->pet->id }}</td>
                        <td><img src="{{ asset('storage/assets/'.$application->pet->image) }}" style="width: 40px;" /></td>
                        <td>{{ $application->pet->name }}</td>
                        <td>{{ $application->pet->age }}</td>
                        <td>{{ $application->user->contact1 }}</td>
                        <td>{{ $application->user->email }}</td>
                        <td>{{ $application->notes }}</td>
                        <td>{{ $application->created_at }}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                {{ $application->status }}
                              
                            </div>
                        </td>
                        <td><button type="button" class="btn btn-outline-info mx-2"  data-bs-toggle="modal" data-bs-target="#modalUpdate{{$application->id}}"><i class="fa-solid fa-pen"></i></button></td>    
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.modal-update')
    @endsection
