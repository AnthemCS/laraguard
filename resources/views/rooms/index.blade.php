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
    </div>
  @endsection