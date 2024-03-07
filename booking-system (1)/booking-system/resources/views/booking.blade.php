@auth

    <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Online Booking</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>

                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="">
                            <div class="card">
                                <div class="card-header">Online Booking</div>

                                <form method="POST" action="{{ route('booking.store') }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="first_name">First Name</label>
                                                <input type="text" class="form-control" id="first_name" name="first_name"
                                                    value="{{ Auth::user()->first_name }}" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="last_name">Last Name</label>
                                                <input type="text" class="form-control" id="last_name" name="last_name"
                                                    value="{{ Auth::user()->last_name }}" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                required value="{{ Auth::user()->email }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="number">Number</label>
                                            <input type="text" class="form-control" id="number" name="number"
                                                required value="{{ Auth::user()->number }}">
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="checkin_date">Check-In Date</label>
                                                <input type="date" class="form-control" id="checkin_date"
                                                    name="checkin_date" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="checkout_date">Check-Out Date</label>
                                                <input type="date" class="form-control" id="checkout_date"
                                                    name="checkout_date" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="house">House</label>
                                            <select class="form-control" id="house" name="house" required>
                                                <option value="LJRC HOMESTAY">LJRC HOMESTAY</option>
                                                <option value="JADESTAR">JADESTAR</option>
                                                <option value="MALAZA HOMESTAY">MALAZA HOMESTAY</option>
                                                <option value="YAHOO HOMESTAY">YAHOO HOMESTAY</option>
                                                <option value="R&R HOMESTAY">R&R HOMESTAY</option>
                                                <option value="ROSE HOMESTAY">ROSE HOMESTAY</option>
                                            </select>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endauth
