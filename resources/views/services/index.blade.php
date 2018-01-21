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
                            <th>Name of Service</th>
                            <th>Description</th>
                            <th>Unit Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->description }}</td>
                            <td>{{ $s->unit_price }}</td>
                            <td><a href="{{ route('services.edit', $s->id) }}" class="btn btn-sm btn-outline-primary">Action</a></td>
                        </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection