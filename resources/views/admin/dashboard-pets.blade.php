@extends('layouts.master')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pet lists</li>
    </ol>
    <div class="row">
        {{--message--}}
        @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ session()->get('message') }} 
        </div>
         
        @endif
        <div class="card mb-4 px-auto">
            <div class="card-header px-auto">
                <i class="fas fa-table"></i>
                Petlists for Adoption
            </div>
            <div class="card-body px-0">
                <div class="d-flex justify-content-end my-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fa-solid fa-plus"></i>ADD TO LIST</button>
                </div>
                
            
                <table id="datatablesSimple" class="table-responsive">
                    
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Age</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Age</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            
                        </tr>
                    </tfoot>
                    <tbody>
                        
                            @foreach($pets as $pet)
                            <tr>
                            <td>{{ $pet -> id }}</td>
                            <td><img src="{{ asset('storage/assets/'.$pet->image) }}" style="width: 40px" /></td>
                            <td>{{ $pet -> name }}</td>
                            <td>{{ $pet -> description }}</td>
                            <td>{{ $pet -> age }}</td>
                            <td><a href="{{ route('updatePet',$pet->id) }}" data-bs-toggle="modal" data-bs-target="#modalEdit{{$pet->id}}" type="button" class="btn btn-info btn-sm">EDIT</a></td>
                            <td><a href="{{ route('deletePet',$pet->id) }}" type="button" class="btn btn-danger btn-sm">DELETE</a></td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.modal-pet')
    @include('admin.modal-edit')
    @endsection
