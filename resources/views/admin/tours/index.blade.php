@extends('admin.layouts.app')
@section('title')
    Tours
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <a href="{{ route('admin.tours.create') }}" class="btn btn-primary mb-3" >Create New</a>
            <div class="table-responsive">
                <table class="table table-striped table-hover text-center w-100">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Duration</th>
                        <th>Location</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tours as $tour)
                        <tr>
                            <td>{{ $tour->title }}</td>
                            <td>{{ $tour->duration }} Days</td>
                            <td>{{ $tour->location }}</td>
                            <td>PKR. {{ number_format($tour->price,0) }}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-title="Add Iternary" onclick="addIternary({{$tour->id}})" ><i class="fa fa-plus" ></i></button>
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-title="View Iternaries" onclick="viewIternary({{$tour->id}})" ><i class="fa fa-eye" ></i></button>
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-title="Add Departure" onclick="addDeparture({{$tour->id}})" ><i class="fa fa-plus" ></i></button>
                                <button type="button" class="btn btn-sm btn-primary" onclick="viewDepartures({{$tour->id}})" ><i class="fa fa-eye" ></i></button>
                                <a href="{{ route('admin.tours.edit',$tour->id) }}" class="btn btn-sm btn-primary" ><i class="fa fa-edit" ></i></a>
                                <button type="button" onclick="deleteConf('{{ route('admin.tours.destroy',$tour->id) }}')" class="btn btn-sm btn-danger" ><i class="fa fa-trash" ></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        window.onload = function(){
            $("table").DataTable();
            $("[data-toggle=tooltip]").tooltip();
        }

        function addDeparture(tourId){
            $.get("{{url('admin/tours')}}/"+tourId+'/departures/create',{},function(e){
                $(".conf").html(e);
                $("#create_departure_modal").modal();
            });
        }

        function viewDepartures(tourId){
            $.get("{{url('admin/tours')}}/"+tourId+'/departures',{},function(e){
                $(".conf").html(e);
                $("#all_departures_modal").modal();
            });
        }

        function addIternary(tourId){
            $.get("{{url('admin/tours')}}/"+tourId+'/itineraries/create',{},function(e){
                $(".conf").html(e);
                $("#create_iternary_modal").modal();
                CKEDITOR.replace('description');
            });
        }

        function viewIternary(tourId){
            $.get("{{url('admin/tours')}}/"+tourId+'/itineraries',{},function(e){
                $(".conf").html(e);
                $("#all_itinearies_modal").modal();
            });
        }
    </script>
@endsection
