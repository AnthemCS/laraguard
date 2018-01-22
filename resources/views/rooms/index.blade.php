@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col my-3">
                <h3 class="d-flex justify-content-between align-items-center mb-3">
                    <span>Rooms <span class="badge badge-primary">{{ $rooms->count() }}</span></span>
                    <a href="{{ route('rooms.create') }}" class="btn btn-outline-primary">Add Room</a>

                </h3>
                <hr>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Room number</th>
                            <th>Title</th>
                            <th>Room type</th>
                            <th>Description</th>
                            <th>Occupancy</th>
                            <th>Beds</th>
                            <th>Price</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rooms as $r)
                        <tr>
                            <td>{{ $r->id }}</td>
                            <td><span class="badge badge-warning badge-pill">{{ $r->room_no }}</span></td>
                            <td>{{ $r->room_title }}</td>
                            <td>{{ $r->room_type }}</td>
                            <td>{{ $r->description }}</td>
                            <td>{{ $r->occupancy }}</td>
                            <td>{{ $r->beds }}</td>
                            <td>{{ $r->price }}</td>
                            @if($r->reservation)
                              <td><a href="{{ route('home.new-reservation', 1) }}" class="btn btn-sm btn-outline-primary">Create Reservation</a></td>
                            @endif
                        </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
  @endsection