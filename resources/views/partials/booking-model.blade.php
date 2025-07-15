<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <form method="POST" action="{{ route('back.booking') }}" id="bookingForm">
                @csrf
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="bookingModalLabel">Book Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body py-3">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label">Name <b class="text-danger">*</b></label>
                            <input type="text" name="name" class="form-control " required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Email<b class="text-danger">*</b></label>
                            <input type="email" name="email" class="form-control " required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Phone<b class="text-danger">*</b></label>
                            <input type="tel" name="phone" class="form-control" required>
                        </div>

                    </div>
                </div>

                <div class="modal-footer
                                border-0">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary rounded-pill px-4">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
