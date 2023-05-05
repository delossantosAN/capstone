
@extends('layouts.app')     
@section('content')
<script src="{{ asset('assets/js/bootstrap.bundle.min1.js') }}"></script>
<div class="container-fluid">
  <div class="align-items-center py-4">
    <div class="col-md-8 mx-auto">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>
            
          <div div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
            @endif
              {{ __('Welcome Back!') }}&nbsp;{{ Auth::user()->firstname }}&nbsp;{{ Auth::user()->lastname }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
