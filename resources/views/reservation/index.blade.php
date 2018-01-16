@extends('layouts.app') 
@section('content') 

@foreach($reservations as $booking)
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul>
                        <li class="text-success">ID: {{ $booking->id }}</li>
                        <li>
                            <strong> {{ $booking->guest->firstname }} {{ $booking->guest->lastname}}</strong>
                        </li>
                        <li>{{ $booking->guest->contact_no}}</li>
                        <li>{{ $booking->departure_date }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach 
@endsection