<div>
    <div class="modal fade" id="inquiryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow rounded-4">
                <div class="modal-header bg-light border-bottom-0 rounded-top-4">
                    <h5 class="modal-title fw-bold text-dark">Book an Appointment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form method="POST" action="{{ route('inquiry.store') }}">
                        @csrf
                        <input type="hidden" name="service_name" id="service_name">
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Full Name</label>
                            <input type="text" placeholder="Enter Your Name" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">Phone Number</label>
                            <input type="tel" placeholder="Enter Number" name="phone" class="form-control" required>
                        </div>
                        <p class="text-muted">Service: <span id="service_text"></span></p>
                        <div class="mb-4">
                            <label class="form-label text-muted small fw-bold">Service Details</label>
                            <textarea name="message" placeholder="Discription" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="theme-btn btn  w-100 rounded-pill py-2 fw-bold">
                            Submit Inquiry
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

    <script>
        const inquiryModal = document.getElementById('inquiryModal');

        inquiryModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const serviceName = button.getAttribute('data-service');

            document.getElementById('service_name').value = serviceName;
            document.getElementById('service_text').innerText = serviceName;
        });
    </script>

@if(session('success'))
<script>
    document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'Inquiry Submitted!',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        });
    });
</script>
@endif

    