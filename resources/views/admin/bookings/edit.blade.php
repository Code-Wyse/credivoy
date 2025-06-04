<div class="modal fade" id="edit_booking_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.bookings.update',$booking) }}" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Change Booking Status</h5>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <x-forms.input type="select" label="Status" input-name="payment_status" input-id="payment_status" placeholder="Select Payment Status" :required="true" :value="$booking->payment_status" :options="config('constants.booking.statuses')" />
                    <div id="advance_deposit" @class(['d-none' => $booking->payment_status != 'advance_deposited']) >
                        <x-forms.input label="Advance Deposit Amount" input-name="advance_deposit_amount" input-id="advance_deposit_amount" placeholder="Enter Advance Deposit Amount" :value="old('advance_deposit_amount')" :errors="$errors->get('advance_deposit_amount')" :required="false" type="number" number-min="1" step="1" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" >Cancel</button>
                    <button type="submit" class="btn btn-success" >Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $("#payment_status").on('change',function(e){
        if(e.target.value === 'advance_deposited') {
            $("#advance_deposit").removeClass('d-none');
        }
        else {
            $("#advance_deposit").addClass('d-none');
        }
    });
</script>
