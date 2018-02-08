@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5 text-center">

            <h2>Edit Reservation, <small>#{{ $rsv->id }}</small></h2>
            <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
        <div class="row">
            <div class="col-md-4 order-md-1">
                <h4 class="mb-3">Guest Information</h4>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ ucfirst($rsv->guest->title) }} {{ $rsv->guest->firstname }} {{ $rsv->guest->lastname  }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $rsv->guest->contact_no }}, {{ $rsv->guest->email }}</h6>
                        <p class="card-text">{{ $rsv->guest->addr_line_1 }}, {{ $rsv->guest->addr_line_1 }} {{ $rsv->guest->city }}</p>
                        <a href="{{ route('guests.show', $rsv->guest->id ) }}" class="card-link">View Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 order-md-2">
                <h4 class="mb-3">Reservation Information</h4>
                <form class="form-horizontal" method="POST" action="{{ route('reservations.update', $rsv->id) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">




                    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                    <label for="status" class="control-label">Reservation status <span class="badge badge-pill badge-{{ $rsv->status->type }}">{{ $rsv->status->name }}</span></label>


                    <select name="status" class="form-control" id="country" required>
                        <option value="">Choose...</option>
                        <option value="Checked-In" selected>Check-In</option>
                        <option value="Checked-Out">Check-Out</option>
                        <option value="Cancelled">Cancel</option>
                        <option value="Modified">Modify</option>
                        <option value="Approved">Approve</option>
                        <option value="No-Show">No Show</option>
                    </select>

                    @if ($errors->has('status'))
                        <span class="help-block">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                    @endif

            </div>
                    <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                        <label for="duration" class="control-label">Duration of Stay</label>

                        <input type="text" class="form-control" name="daterange" value="{{ $rsv->arrival_date  }} - {{ $rsv->departure_date }}" required/>
                        @if ($errors->has('duration'))
                            <span class="help-block">
                                                    <strong>{{ $errors->first('duration') }}</strong>
                                                </span>
                        @endif

                    </div>

                    <div class="form-row">
                        <div class="form-group{{ $errors->has('arrival_date') ? ' has-error' : '' }} col-md-5">
                            <label for="arrival_date" class="control-label">Arrival date</label>


                            <input type="text" name="arrival_date"  class="form-control" value="{{ $rsv->arrival_date }}" readonly/>
                            @if ($errors->has('arrival_date'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('arrival_date') }}</strong>
                                    </span>
                            @endif

                        </div>


                        <div class="form-group{{ $errors->has('departure_date') ? ' has-error' : '' }} col-md-5">
                            <label for="departure_date" class="control-label">Departure date</label>


                            <input id="departure_date" type="text" class="form-control" name="departure_date" value="{{ $rsv->departure_date  }}" readonly/>
                            @if ($errors->has('departure_date'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('departure_date') }}</strong>
                                    </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('nights') ? ' has-error' : '' }} col-md-2">
                            <label for="nights" class="control-label">No. of Nights</label>


                            <input id="nights" type="number"  class="form-control" value="{{ $rsv->nights }}" name="nights" readonly>
                            @if ($errors->has('nights'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('nights') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group{{ $errors->has('adults') ? ' has-error' : '' }} col-md-6">
                            <label for="adults" class="control-label">No. of Adults</label>


                            <input id="adults" type="number" min="0" class="form-control" value="{{ $rsv->adults }}" name="adults" required>
                            @if ($errors->has('adults'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('adults') }}</strong>
                                    </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('children') ? ' has-error' : '' }} col-md-6">
                            <label for="children" class="control-label">No. of Children</label>


                            <input id="children" type="number" min="0" class="advanced_select form-control" value="{{ $rsv->children }}" name="children" required>
                            @if ($errors->has('children'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('children') }}</strong>
                                        </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                        <label for="comments" class="control-label">Comments/Notes</label>


                        <textarea class="form-control" name="comments">{{ $rsv->comments }}</textarea>
                        @if ($errors->has('comments'))
                            <span class="help-block">
                                                <strong>{{ $errors->first('comments') }}</strong>
                                            </span>
                        @endif

                    </div>

                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Update Reservation</button>
                </form>
            </div>
        </div>
    </div>

@endsection