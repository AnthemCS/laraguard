@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col my-3">
                <h3 class="d-flex justify-content-between align-items-center mb-3">
                    <span>Show Reservation  # {{ $rsv->id }} </span>
                    <a href="{{ route('reservations.edit', $rsv->id) }}" class="btn btn-outline-secondary">Edit Reservation</a>
                </h3>
                <hr>

            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <div class="card-group">
                    <div class="card border-primary">
                        <div class="card-header">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="">Booking Details</span>
                                <a href="{{ route('reservations.edit', $rsv->id) }}" class="btn btn-sm btn-outline-secondary">Edit Reservation</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group mb-3 list-group-flush">
                                <h6  class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                    <span>Guest</span>
                                    <a class="d-flex align-items-center text-muted" href="#">
                                        <span data-feather="plus-circle"></span>
                                    </a>
                                </h6>
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Name</h6>
                                    </div>
                                    <span class="text-muted">{{ $rsv->guest->firstname }} {{ $rsv->guest->lastname }}</span>
                                </li>
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Mobile</h6>
                                    </div>
                                    <span class="text-muted">{{ $rsv->guest->contact_no }}</span>
                                </li>
                                <li href="#"  class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">E-mail</h6>
                                    </div>
                                    <span class="text-muted">{{ $rsv->guest->email }}</span>
                                </li>
                                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                    <span>Schedule</span>
                                    <a class="d-flex align-items-center text-muted" href="#">
                                        <span data-feather="plus-circle"></span>
                                    </a>
                                </h6>
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Arrival date</h6>
                                    </div>
                                    <span class="text-muted">{{ $rsv->arrival_date }}</span>
                                </li>
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Departure</h6>
                                    </div>
                                    <span class="text-muted">{{ $rsv->departure_date }}</span>
                                </li>
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Duration</h6>
                                    </div>
                                    <span class="text-muted">{{ $rsv->nights }} Nights</span>
                                </li>
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">No. of guests</h6>
                                    </div>
                                    <span class="text-muted">{{ $rsv->adults }} adults / {{ $rsv->children }} children</span>
                                </li>
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Status <small class="text-{{ $rsv->status->type }}">{{ $rsv->status->name }}</small></h6>
                                    </div>
                                    <span class="text-muted">
                                       <select class="form-control" name="" id="">
                                         @foreach($statuses as $st)
                                               <option value="{{ $st->id }}">{{ $st->name }}</option>
                                         @endforeach
                                       </select>
                                  </span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <form action="#check-In" class="form">
                                <button type="submit" class="btn btn-outline-primary btn-block btn-lg"> Save Reservation</button>
                            </form>
                        </div>

                    </div>
                    <div class="card border-primary">
                        <div class="card-header">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="">Reserved rooms</span>
                                <a href="{{ route('rooms.create', $rsv->id) }}" class="btn btn-sm btn-success">Create a Room</a>
                            </h4>
                        </div>
                        <div class="card-body">

                            <ul class="list-group mb-3 list-group-flush">

                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6>Rooms</h6>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="bg-light">
                                                <th>Room type</th>
                                                <th>Room No.</th>
                                                <th>Adults</th>
                                                <th>Children</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                                </thead>
                                                <tbody>
                                              @if(!is_null($rsv->rooms))
                                                  @foreach($rsv->rooms as $room)
                                                <tr>
                                                    <td>{{ $room->room_type }}</td>
                                                    <td><span class="badge badge-warning">{{ $room->room_no }}</span></td>
                                                    <td>2</td>
                                                    <td>0</td>
                                                    <td>R {{ $room->price }}</td>
                                                    <td><a class="btn btn-outline-danger btn-sm" href="{{ route('reservations.remove-room', ['rsvId' => $rsv->id ]) }}">Remove</a></td>
                                                </tr>
                                                @endforeach
                                              @endif

                                                <tr>
                                                    <form id="add-room-form" action="{{ route('reservations.add-room', $rsv->id) }}" method="GET" style="display: none;">
                                                    <td colspan="5">

                                                            {{ csrf_field() }}
                                                        <select class="form-control" name="roomId" id="">
                                                           @foreach($roomList as $room)
                                                            <option value="{{ $room->id }}">{{ $room->room_title }}</option>
                                                           @endforeach
                                                        </select>

                                                    </td>
                                                    <td><a onclick="event.preventDefault();document.getElementById('add-room-form').submit();" href="{{ route('reservations.add-room', $rsv->id) }}" class="btn btn-sm btn-outline-primary"> Add a Room</a></td>
                                                    </form>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </li>
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6>Services Included</h6>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="bg-light">
                                                <th>Name of Service</th>
                                                <th>Description</th>
                                                <th>Unit price</th>
                                                <th>Action</th>
                                                </thead>
                                                <tbody>
                                           @if(!is_null($rsv->services))
                                               @foreach($rsv->services as $s)
                                                <tr>
                                                    <td>{{ $s->name }}</td>
                                                    <td><span class="badge badge-warning">{{ $s->description }}</span></td>
                                                    <td>R {{ $s->unit_price }}</td>
                                                    <td><a class="btn btn-outline-danger btn-sm" href="{{ route('services.destroy', $s->id) }}">Remove</a></td>
                                                </tr>
                                                @endforeach
                                           @endif
                                           <tr>
                                               <form id="add-service-form" action="{{ route('reservations.add-service', $rsv->id) }}" method="GET" style="display: none;">
                                                   {{ csrf_field() }}
                                               <td colspan="3">
                                                   <select class="form-control" name="serviceId" id="">
                                                       @foreach($servicesList as $s)
                                                           <option value="{{ $s->id }}">{{ $s->name }}</option>
                                                       @endforeach
                                                   </select>
                                               </td>
                                               <td><a onclick="event.preventDefault();document.getElementById('add-service-form').submit();" href="{{ route('reservations.add-service', $rsv->id) }}" class="btn btn-sm btn-outline-primary"> Add a Service</a></td>
                                            </form>
                                           </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection