<style>
    /* Apply compact style ONLY to inputs (NOT textarea) */
    #inquiryForm input.form-control {
        height: 32px;
        padding: 4px 10px;
        font-size: 14px;
    }

    /* Keep textarea natural / proper height */
    #inquiryForm textarea {
        min-height: 80px;
        /* 👈 good readable height */
        padding: 8px 10px;
        font-size: 14px;
        resize: vertical;
        /* optional: user can expand */
    }

    /* Label styling */
    #inquiryForm label {
        font-size: 13px;
    }

    /* Reduce spacing */
    #inquiryForm .mb-2 {
        margin-bottom: 8px !important;
    }

    /* Compact modal width */
    .modal-dialog {
        max-width: 420px;
    }
</style>

<div>
    <div class="modal fade" id="inquiryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow rounded-4">
                <div class="modal-header bg-light border-bottom-0 rounded-top-4">
                    <h5 class="modal-title fw-bold" style="color: #1a1a2e;">Book an Appointment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body p-4 pt-2">
                    <!-- ✅ Added ID here -->
                    <form id="inquiryForm" method="POST" action="{{ route('inquiry.store') }}">
                        @csrf

                        <input type="hidden" name="category" id="category">
                        <input type="hidden" name="sub_category" id="sub_category">
                        <input type="hidden" name="service_name" id="service_name">

                        <div class="mb-2">
                            <label class="form-label mb-1 small fw-bold">Full Name</label>
                            <input type="text" name="name" class="form-control form-control-sm" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label mb-1 small fw-bold">Phone Number</label>
                            <input type="text" name="phone" class="form-control form-control-sm" pattern="[0-9]+"
                                inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label mb-1 small fw-bold">E-Mail</label>
                            <input type="email" name="email" class="form-control form-control-sm" required>
                        </div>

                        <p class="mb-2 fw-semibold" style="font-size: 0.875rem;">
                            Service: <span id="service_text"></span>
                        </p>

                        <div class="mb-2">
                            <label class="form-label mb-1 small fw-bold">Service Details</label>

                            <textarea name="message" class="form-control form-control-sm" rows="2" required></textarea>

                            <small id="messageError" style="color:red; display:none;">
                                Only normal message allowed. No code or special symbols.
                            </small>
                        </div>

                        <button type="submit" class="theme-btn btn w-100 rounded-pill py-2 fw-bold">
                            Submit Enquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Existing modal script -->
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

<!-- ✅ FIXED VALIDATION SCRIPT -->
<script>
    document.addEventListener("DOMContentLoaded", function () {

        const form = document.getElementById('inquiryForm');

        form.addEventListener('submit', function (e) {

            const messageField = form.querySelector('textarea[name="message"]');
            const error = document.getElementById('messageError');

            const pattern = /^[A-Za-z0-9\s.,!?'-]{5,500}$/;
            const suspicious = /(<|>|{|}|\$|;|SELECT|INSERT|DELETE|DROP|SCRIPT)/i;

            if (!pattern.test(messageField.value) || suspicious.test(messageField.value)) {
                e.preventDefault();

                error.style.display = 'block';
                messageField.classList.add('is-invalid');
                messageField.focus();

            } else {
                error.style.display = 'none';
                messageField.classList.remove('is-invalid');
            }

        });

    });
</script>

@if(session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                toast: true,
                position: 'center',
                icon: 'success',
                title: 'Inquiry Submitted!',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        });
    </script>
@endif