<div class="modal fade" id="all_itinearies_modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">All Itinearies</div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover text-center w-100">
                            <thead>
                            <tr>
                                <th>Day</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($itinearies as $iternary)
                                <tr>
                                    <td>{{ $iternary->day }}</td>
                                    <td>{{$iternary->title}}</td>
                                    <td>{{$iternary->description}}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteConf('{{route('admin.tours.itineraries.destroy',[$tour_id,$iternary->id])}}')" ><i class="fa fa-trash" ></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" >Close</button>
            </div>
        </div>
    </div>
</div>
