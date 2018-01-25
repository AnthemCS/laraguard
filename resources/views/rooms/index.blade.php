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
            <div class="col-md-8">
                <h4>Rooms </h4>

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

                            <td><div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a class="dropdown-item" > <span data-feather="eye"></span> View</a>
                                        <a class="dropdown-item" ><span data-feather="edit-2"></span> Edit</a>
                                        <a class="dropdown-item" ><span data-feather="trash-2"></span> Delete</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('invoices.show', 1) }}"><span data-feather="book-open"></span> Create Reservation</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                          @endforeach
                        </tbody>
                    </table>

            </div>
            <div class="col-md-4">
                <h4>Add a Room</h4>
                <div class="card">
                    <div class="card-body border-dark">
                    <div class="form-row">
                            <div class="form-group{{ $errors->has('room_type') ? ' has-error' : '' }} col-md-8">
                                <label for="room_type" class="control-label">Type of Room</label>

                                <select name="room_type" class="form-control" id="room_type" required autofocus>
                                    <option value="Single" {{ old("room_type")== "Single" ? "selected": ""  }}>Single</option>
                                    <option value="Double" {{ old("room_type")== "Double" ? "selected": ""  }}>Double</option>
                                    <option value="Twin Bed" {{ old("room_type")== "Twin Bed" ? "selected": ""  }}>Twin Bed</option>
                                    <option value="Family" {{ old("room_type")== "Family" ? "selected": "" }}>Family</option>
                                </select>

                                @if ($errors->has('room_type'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('room_type') }}</strong>
                                </span>
                                @endif

                            </div>
                        <div class="form-group{{ $errors->has('room_no') ? ' has-error' : '' }} col-md-4">
                            <label for="room_no" class="control-label">Room #</label>


                            <input id="rooo_no" type="number" min="1" class="form-control" name="room_no" value="{{ old('room_no') }}" required>
                            @if ($errors->has('room_no'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('room_no') }}</strong>
                                </span>
                            @endif

                        </div>
                    </div>
                            <div class="form-group{{ $errors->has('room_title') ? ' has-error' : '' }}">
                                <label for="room_title" class="control-label">Title of Room</label>


                                <input id="rooo_title" type="text" class="form-control" name="room_title" value="{{ old('room_title') }}" required>
                                @if ($errors->has('room_title'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('room_title') }}</strong>
                                </span>
                                @endif

                            </div>
                            <!-- /input:title -->

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="control-label">Describe the Room</label>

                                <textarea class="form-control" name="description" col="10" rows="5" required>{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif

                            </div>

                        <div class="form-row">
                            <div class="form-group{{ $errors->has('occupancy') ? ' has-error' : '' }} col-md-6">
                                <label for="occupancy" class="control-label">Occupancy</label>


                                <input id="occupancy" type="number" min="1" class="form-control" name="occupancy" value="{{ old('occupancy') }}" required>
                                @if ($errors->has('occupancy'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('occupancy') }}</strong>
                                </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('beds') ? ' has-error' : '' }} col-md-6">
                                <label for="beds" class=" control-label">No of Beds</label>

                                <input id="beds" type="number" min="1" class="form-control" name="beds" value="{{ old('beds') }}"required>
                                @if ($errors->has('beds'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('beds') }}</strong>
                                </span>
                                @endif

                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="control-label">Price (R)</label>


                            <input id="price" type="number" class="form-control" value="{{ old('price') }}" name="price">
                            @if ($errors->has('price'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span>
                            @endif

                        </div>
                        {{--//TODO: Add which lodge to assign the room to--}}

                    </div>
                    <div class="card-footer">
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-lg btn-block btn-primary">
                                    <i class="glyphicon glyphicon-lock"></i> Save Room
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
  @endsection