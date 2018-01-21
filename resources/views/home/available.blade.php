@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col my-5">
                <h3> Rooms Free Today </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque ea enim ipsa iure libero maxime numquam perspiciatis praesentium quae, qui quia, quibusdam rem saepe suscipit tempore temporibus vitae voluptates?</p>
                <hr/>
            </div>
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Room number</th>
                            <th>Title of Room</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>3</td>
                            <td><span class="badge badge-warning badge-pill">F4 </span></td>
                            <td>Kings Suite</td>
                            <td><a href="{{ route('home.new-reservation', 1) }}" class="btn btn-sm btn-outline-primary">Create Reservation</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection