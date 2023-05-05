<section class="py-5" id="adoption">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Pets for Adoption</h2>
                    <p class="lead fw-normal text-muted mb-5">Saving one animal won’t change the world, but it will change the world for that one animal.</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            @foreach($pets as $pet)       
                <div class="col col-sm-6 col-md-6 col-lg-4 mb-5">
                    <div class="card h-100 shadow border-2">
                        <input type="hidden" value={{ $pet->id }}/>
                        <img class="card-img-top" src="{{ asset('storage/assets/'.$pet->image) }}" alt="..." />
                        <div class="card-body p-4">
                            <a class="text-decoration-none link-dark stretched-link" href="{{ route('applicationId',$pet->id) }}">
                                <h5 class="card-title mb-3"> {{ $pet -> name }}</strong></h5></a>
                                <p class="card-text mb-0">{{ $pet -> description }}</p>
                            
                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="d-flex align-items-center">
                                    <p>AGE: {{ $pet -> age }}&nbsp;yr/s old</p>
                                </div>
                                
                                    <a class="btn btn-primary px-4 me-sm-3 rounded-pill" href="{{ route('applicationId',$pet->id) }}">adopt</a>
                                   
                                
                            </div>
                        </div>
                    </div>
                </div> 
            @endforeach 
        </div>    
</section>
