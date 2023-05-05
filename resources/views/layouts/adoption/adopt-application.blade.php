@extends('layouts.app')
@section('content')
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('storage/assets/'.$pet ->image) }}" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1">ID NO: {{ $pet->id }}</div>
                <h1 class="display-5 fw-bolder">{{ $pet ->name }}</h1>
                <div class="fs-5 mb-5">
                    
                    <span>AGE: {{ $pet->age }} yr/s old</span>
                </div>
                <p class="lead">{{ $pet->description }}</p>
                <div class="d-flex">
                <form method="POST" action="{{ route('appsubmit') }}">
                    @csrf
                    <input type="hidden" name="user_id" value={{ Auth::user()->id }}>
                    <input type="hidden" name="pet_id"value={{ $pet->id }}>
                    <input type="hidden" name="status" value="pending">
                    <input type="hidden" name="notes" value="applicaton for review">
                    <button class="btn btn-outline-primary flex-shrink-0" type="submit">
                        Send Application
                    </button>
                </form>
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