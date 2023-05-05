<!-- Modal add -->
@foreach($bookings ['sched'] as $booking)
<div class="modal fade" id="modalUpdateBooking{{$booking->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEdit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">BOOKING STATUS</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('savebookingstatus') }}" class="text-start needs-validation" novalidate method="POST" name = "updatebooking" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="hidden" class="form-control" id="id" name="id" rows="3" value="{{$booking->id}}" required>
                    <select class="form-select" aria-label="Default select example" name="status" id="status" required>
                      <option>{{ $booking->status }}</option>
                      <option value="approved">approved</option>
                      <option value="declined">declined</option>
                      <option value="pending">pending</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label form="status" class="form-label">Admin Notes</label>
                    <input type="text" class="form-control" name="adminnotes" id="adminnotes" value="{{$booking->admin_notes}}" required>
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