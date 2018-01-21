@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-booked" role="tab" aria-controls="nav-booked" aria-selected="true">Booked</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-occupied" role="tab" aria-controls="nav-profile" aria-selected="false">Occupied</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-available" role="tab" aria-controls="nav-contact" aria-selected="false">Available</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-booked" role="tabpanel" aria-labelledby="nav-booked-tab">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Room Number</th>
                                        <th scope="col"> Room Type</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Occupancy</th>
                                        <th scope="col">Beds</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($rooms as $room)
                                    <tr>
                                        <td>{{ $room->id }}</td>
                                        <td>{{ $room->room_no }}</td>
                                        <td>{{ $room->room_type }}</td>
                                        <td>{{ $room->description }}</td>
                                        <td>{{ $room->occupancy }}</td>
                                        <td>{{ $room->beds }}</td>
                                        <td>{{ $room->price }}</td>
                                        <td><a href="{{ route('rooms.edit', $room->id) }}">Edit</a> | <a href="{{ route('rooms.destroy', $room->id) }}">Delete</a></td>
                                    </tr>
                                   @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-occupied" role="tabpanel" aria-labelledby="nav-occupied-tab">...</div>
                            <div class="tab-pane fade" id="nav-available" role="tabpanel" aria-labelledby="nav-available-tab">...</div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
@endsection


