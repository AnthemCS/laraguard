@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <h1 class="display-4">ComfortStay Manager Prototype</h1>
                <p class="lead">ComfortStay Manager is a prototype for a campus room management system which will help Universities better manage room allocation of students inside the campus.</p>
                <hr class="my-4">
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="{{url("/register")}}" role="button">Register a new account</a> OR <a class="btn btn-secondary btn-lg" href="{{url("/login")}}" role="button">Login into existing account</a>
                </p>
            </div>
        </div>
        <div class="row">

            <div class="card-group">
              @foreach($rooms as $room)
                <div class="col-md">
                    <div class="card">
                        <img class="card-img-top" src="https://dummyimage.com/328x180/eeeeee/000" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $room->room_title }}</h5>
                            <p class="card-text">{{ $room->description }}</p>
                            <a href="{{ url('reservation/'.$room->id.'/create') }}" class="btn btn-primary">Book Room</a>

                        </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>







@endsection