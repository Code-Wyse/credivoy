<div class="modal fade" id="all_departures_modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Departures</h5>
                <button class="close" data-dismiss="modal" >&times;</button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover text-center w-100">
                        <thead>
                        <tr>
                            <th>Departure Date</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($departures as $departure)
                            <tr>
                                <td>{{ $departure->departure_date->format('d F, Y') }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-danger" onclick="deleteConf('{{route('admin.tours.departures.destroy',[$departure->tour_id,$departure->id])}}')" ><i class="fa fa-trash" ></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
