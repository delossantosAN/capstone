<!-- Modal add -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">ADD NEW PET</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('addPet') }}" class="text-start needs-validation" novalidate method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label form="name" class="form-label">Name of Pet</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                    <div class="invalid-feedback">
                        Missing or invalid format.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name=description rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label form="age" class="form-label">Age</label>
                    <input type="float" class="form-control" name="age" id="age" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <input class="form-control" type="file" id="image" name="image" required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
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