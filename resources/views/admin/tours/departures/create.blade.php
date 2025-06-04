<div class="modal fade" id="create_departure_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.tours.departures.store',$tour_id) }}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add Departure Date</h5>
                    <button class="close" data-dismiss="modal" >&times;</button>
                </div>
                <div class="modal-body">
                    <x-forms.input input-name="departure_date" input-id="departure_date" label="Departure Date" type="date" :required="true" :value="old('departure_date')" placeholder="Select Departure Date" :errors="$errors->get('departure_date')" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" >Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
