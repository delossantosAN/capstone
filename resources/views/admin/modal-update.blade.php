<!-- Modal add -->
@foreach($applications['status'] as $application)
<div class="modal fade" id="modalUpdate{{$application->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalUpdate" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">UPDATE APPLICATION STATUS</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('saveStatus') }}" class="text-start needs-validation" novalidate method="POST" name = "saveUpdate" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                    <label form="name" class="form-label">Change Status</label>
                    <input type="hidden" class="form-control" name="statusId" id="statusId" value="{{ $application->id }}" required>
                    <input type="hidden" class="form-control" name="userId" id="userId" value="{{ $application->user->id }}" required>
                    <select class="form-select" aria-label="Default select example" name="status" id="status" required>
                      <option>{{ $application->status }}</option>
                      <option value="approved">approved</option>
                      <option value="declined">declined</option>
                      <option value="pending">pending</option>
                    </select>
                    <label form="name" class="form-label">Notes</label>
                    <input type="text" class="form-control" name="notes" id="notes" value="{{ $application->notes }}" required>
                    <div class="invalid-feedback">
                        Missing or invalid format.
                    </div>
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