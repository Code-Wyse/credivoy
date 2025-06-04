<div class="modal fade" id="create_iternary_modal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="{{ route('admin.tours.itineraries.store',$tour_id) }}" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Create Itineary</h5>
                </div>
                <div class="modal-body">
                    @csrf
                    <x-forms.input input-name="day" input-id="day" :value="old('day')" :errors="$errors->get('day')" label="Day" placeholder="Enter Day" />
                    <x-forms.input input-name="title" input-id="title" :value="old('title')" :errors="$errors->get('title')" label="Title" placeholder="Enter Title" />
                    <x-forms.input input-name="description" input-id="description" :value="old('description')" :errors="$errors->get('description')" label="Description" placeholder="Enter Description" type="textarea" />
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" >Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" >Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
