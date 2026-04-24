<div>
    <div class="modal fade" id="inquiryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow rounded-4">
                <div class="modal-header bg-light border-bottom-0 rounded-top-4">
                    <h5 class="modal-title fw-bold" style="color: #1a1a2e;">Book an Appointment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 pt-2">
                    <form method="POST" action="{{ route('inquiry.store') }}">
                        @csrf
                        <input type="hidden" name="category" id="category">
                        <input type="hidden" name="sub_category" id="sub_category">
                        <input type="hidden" name="service_name" id="service_name">
                        <div class="mb-2">
                            <label class="form-label mb-1 small fw-bold" style="color: #2d2d2d;">Full Name</label>
                            <input type="text" placeholder="Enter Your Name" name="name" class="form-control form-control-sm" style="color: #1a1a1a;" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label mb-1 small fw-bold" style="color: #2d2d2d;">Phone Number</label>
                            <input type="tel" placeholder="Enter Number" name="phone" class="form-control form-control-sm" style="color: #1a1a1a;" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label mb-1 small fw-bold" style="color: #2d2d2d;">E-Mail</label>
                            <input type="email" placeholder="Enter E-Mail" name="email" class="form-control form-control-sm" style="color: #1a1a1a;" required>
                        </div>
                        <p class="mb-2 fw-semibold" style="color: #2d2d2d; font-size: 0.875rem;">Service: <span id="service_text" style="color: #1a1a1a;"></span></p>
                        <div class="mb-2">
                            <label class="form-label mb-1 small fw-bold" style="color: #2d2d2d;">Service Details</label>
                            <textarea name="message" placeholder="Description" class="form-control form-control-sm" rows="3" style="color: #1a1a1a;"></textarea>
                        </div>
                        <button type="submit" class="theme-btn btn w-100 rounded-pill py-2 fw-bold justify-content-center">
                            Submit Enquiry
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
        const category = button.getAttribute('data-category') || '';
        const subCategory = button.getAttribute('data-sub-category') || '';
        document.getElementById('service_name').value = serviceName;
        document.getElementById('service_text').innerText = serviceName;
        document.getElementById('category').value = category;
        document.getElementById('sub_category').value = subCategory;
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