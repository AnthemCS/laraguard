@extends('layouts.app') 
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-10">
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
                        <li>
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
                            <div class="card-body">
                                <h5 class="card-title text-success">RES-ID: {{ $booking->id }}</h5>
                                <strong> {{ $booking->guest->firstname }} {{ $booking->guest->lastname}}</strong>
                                <p class="card-text">{{ $booking->guest->contact_no}}</p>
                                <p class="card-text">{{ $booking->nights }} nights,from {{ $booking->arrival_date }}, till {{ $booking->departure_date }}</p>
                                <a href="#" class="btn btn-primary">Check-In</a>
                            </div>
                        </div>


@endforeach
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection