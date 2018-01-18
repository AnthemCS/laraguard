@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Arrivals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Departures</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                            <li class="right">
                                <form class="form-inline col">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Search for...">
                                        <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                                    </div>
                                </form>
                            </li>
                        </ul>

                    </div>
                    <div class="card-body">
                        <div class="card-group">
                            @foreach($reservations as $booking)
                                <div class="card col-3">
                                <div class="card-body ">
                                    <h5 class="card-title">RES-ID: {{ $booking->id }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $booking->guest->firstname }} {{ $booking->guest->lastname}}</h6>
                                    <p class="card-text">{{ $booking->guest->contact_no}}</p>
                                    <p class="card-text">{{ $booking->nights }} nights,from {{ $booking->arrival_date }}, till {{ $booking->departure_date }}</p>
                                    <a href="#" class="card-link">Check-In</a>
                                    <a href="#" class="card-link">Postpone</a>
                                </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Rooms
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
                <div class="card my-3" style="width: 18rem;">
                    <div class="card-header">
                      Guests
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>



        </div>
    </div>
@endsection


