<!-- Modal add -->
@foreach($pets as $pet)
<div class="modal fade" id="modalEdit{{$pet->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEdit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">UPDATE</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('updatedPet') }}" class="text-start needs-validation" novalidate method="POST" name = "saveUpdate" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                    <label form="name" class="form-label">Name of Pet</label>
                    <input type="text" class="form-control" name="petname" id="petname" value="{{ $pet->name }}" required>
                    <input type="hidden" class="form-control" name="petid" id="petid" value="{{ $pet->id }}" required>
                    <div class="invalid-feedback">
                        Missing or invalid format.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="petdescription" name="petdescription" rows="3" value="{{ $pet->description }}"required>
                </div>
                <div class="mb-3">
                    <label form="age" class="form-label">Age</label>
                    <input type="float" class="form-control" name="petage" id="petage" value="{{ $pet->age }}" required>
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button href="{{ redirect()->back() }}"type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    
    
                </div>
            </form>
        </div>
        
      </div>
    </div>
  </div>
  @endforeach
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