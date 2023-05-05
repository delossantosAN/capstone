@extends('layouts.master')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Client Information</li>
    </ol>
    <div class="row">
        <div class="card mb-4 px-auto">
            <div class="card-header px-auto">
                <i class="fas fa-table"></i>
                Client Information
            </div>
            <div class="card-body px-0">
                <table id="datatablesSimple" class="table-responsive">
                    
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First</th>
                            <th>Lastname</th>
                            <th>Email Address</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Zip Code</th>
                            <th>Birth Date</th>
                            <th>Contact Number</th>
                            <th>Alternative Contact Number</th>

                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>First</th>
                            <th>Lastname</th>
                            <th>Email Address</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Zip Code</th>
                            <th>Birth Date</th>
                            <th>Contact Number</th>
                            <th>Alternative Contact Number</th>
                            
                        </tr>
                    </tfoot>
                    <tbody>
                        
                            @foreach($users as $user)
                            @if($user -> role_as == 0)
                            <tr>
                           
                            <td>{{ $user -> id }}</td>
                            <td>{{ $user -> firstname }}</td>
                            <td>{{ $user -> lastname }}</td>
                            <td>{{ $user -> email }}</td>
                            <td>{{ $user -> address }}</td>
                            <td>{{ $user -> city }}</td>
                            <td>{{ $user -> zip }}</td>
                            <td>{{ $user -> birthdate }}</td>
                            <td>{{ $user -> contact1 }}</td>
                            <td>{{ $user -> contact2 }}</td>
                            
                            
                            </tr>
                            @endif
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection