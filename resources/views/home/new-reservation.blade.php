@extends('layouts.app')

@section('content')
<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Checkout form</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    </div>
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">

            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Special Rates & Services</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <div class="card">
                <img class="card-img-top" src="https://dummyimage.com/328x180/eee/0011ff.png&text=Image+of+Room" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $room->room_title }} <span class="badge badge-pill badge-success"> Available</span></h5>
                    <blockquote class="blockquote mb-0">
                        <footer class="blockquote-footer">{{ $room->description }}</footer>
                    </blockquote>

                </div>
                <ul class="list-group mb-3 list-group-flush">
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Price </h6>
                            <small>- VAT Included</small>
                        </div>
                        <h4 class="text-success">R {{ $room->price }}</h4>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Room No.</h6>
                        </div>
                        <span class="text-muted"># {{ $room->room_no }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Type of Room</h6>
                        </div>
                        <span class="text-muted">{{ $room->room_type }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Max Occupancy / Beds</h6>
                        </div>
                        <span class="text-muted">{{ $room->occupancy }} / {{ $room->beds }}</span>
                    </li>
                </ul>
            </div>



        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Guest Information</h4>
            <form class="form-horizontal" method="POST" action="{{ url('reservation/'.$room->id.'/create') }}">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} col-md-2">
                        <label for="title" class="control-label">Title</label>


                        <select name="title" class="form-control" id="title" required autofocus>
                            <option value="mr">Mr</option>
                            <option value="mrs">Mrs</option>
                            <option value="miss">Miss</option>
                        </select>

                        @if ($errors->has('title'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                        @endif

                    </div>
                    <!-- /input:title -->
                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }} col-md-5">
                        <label for="firstname" class="control-label">First name</label>


                        <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required> @if ($errors->has('firstname'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }} col-md-5">
                        <label for="lastname" class="control-label">Last name</label>


                        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required> @if ($errors->has('lastname'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                        @endif

                    </div>


                </div>

                <div class="form-row">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-6">
                        <label for="email" class="control-label">E-Mail Address</label>


                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('contact_no') ? ' has-error' : '' }} col-md-6">
                        <label for="contact_no" class=" control-label">Contact Number</label>


                        <input id="contact_no" type="text" class="form-control" name="contact_no" value="{{ old('contact_no') }}"required>
                        @if ($errors->has('contact_no'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('contact_no') }}</strong>
                                </span>
                        @endif

                    </div>
                </div>

                <div class="form-group{{ $errors->has('fax_no') ? ' has-error' : '' }}">
                    <label for="fax_no" class="control-label">Fax Number</label>


                    <input id="fax_no" type="tel" class="form-control" value="{{ old('fax_no') }}" name="fax_no">
                    @if ($errors->has('fax_no'))
                        <span class="help-block">
                                    <strong>{{ $errors->first('fax_no') }}</strong>
                                </span>
                    @endif

                </div>

                <div class="form-row">
                    <div class="form-group{{ $errors->has('addr_line_1') ? ' has-error' : '' }} col-md-6">
                        <label for="addr_line_1" class="control-label">Address Line 1</label>


                        <input id="addr_line_1" type="text" value="{{ old('addr_line_1') }}" class="form-control" name="addr_line_1" required>
                        @if ($errors->has('addr_line_1'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('addr_line_1') }}</strong>
                                </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('addr_line_2') ? ' has-error' : '' }} col-md-6">
                        <label for="addr_line_2" class="control-label">Address Line 2</label>


                        <input id="addr_line_2" type="text" class="form-control" value="{{ old('addr_line_2') }}"  name="addr_line_2">
                        @if ($errors->has('addr_line_2'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('addr_line_2') }}</strong>
                                </span>
                        @endif

                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}  col-md-8">
                        <label for="city" class="control-label">City</label>


                        <input id="city" type="text" class="form-control" value="{{ old('city') }}" name="city" required>
                        @if ($errors->has('city'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('postal_code') ? ' has-error' : '' }} col-md-4">
                        <label for="postal_code" class="control-label">Postal code</label>


                        <input id="postal_code" min="0" type="number" value="{{ old('postal_code') }}" class="form-control" name="postal_code" required>
                        @if ($errors->has('postal_code'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('postal_code') }}</strong>
                                </span>
                        @endif

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" required="">
                            <option value="">Choose...</option>
                            <option>California</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>

                    </div>
                    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }} col-md-6">
                        <label for="country" class="control-label">Country</label>


                        <select name="country" class="form-control" id="country" required>
                            <option value="za">South Africa</option>
                            <option value="ng">Nigeria</option>
                            <option value="pr">Peru</option>
                        </select>

                        @if ($errors->has('country'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('country') }}</strong>
                                </span>
                        @endif

                    </div>
                </div>

                <hr class="mb-4">

                <h4 class="mb-3">Reservation Information</h4>

                <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                    <label for="duration" class="control-label">Duration of Stay</label>

                    <input type="text" class="form-control" name="daterange" value="{{ old('duration')}}" required/>
                    @if ($errors->has('duration'))
                        <span class="help-block">
                                                    <strong>{{ $errors->first('duration') }}</strong>
                                                </span>
                    @endif


                </div>

                <div class="form-row">
                    <div class="form-group{{ $errors->has('arrival_date') ? ' has-error' : '' }} col-md-5">
                        <label for="arrival_date" class="control-label">Arrival date</label>


                        <input type="text" name="arrival_date"  class="form-control" value="{{ old('arrival_date') }}" readonly/>
                        @if ($errors->has('arrival_date'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('arrival_date') }}</strong>
                                    </span>
                        @endif

                    </div>


                    <div class="form-group{{ $errors->has('departure_date') ? ' has-error' : '' }} col-md-5">
                        <label for="departure_date" class="control-label">Departure date</label>


                        <input id="departure_date" type="text" class="form-control" name="departure_date" value="{{ old('departure_date') }}" readonly/>
                        @if ($errors->has('departure_date'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('departure_date') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('nights') ? ' has-error' : '' }} col-md-2">
                        <label for="nights" class="control-label">No. of Nights</label>


                        <input id="nights" type="number"  class="form-control" value="{{ old('nights')}}" name="nights" required>
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


                        <input id="adults" type="number"  class="form-control" value="{{ old('adults')}}" name="adults" required>
                        @if ($errors->has('adults'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('adults') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group{{ $errors->has('children') ? ' has-error' : '' }} col-md-6">
                        <label for="children" class="control-label">No. of Children</label>


                        <input id="children" type="number" class="advanced_select form-control" value="{{ old('children')}}" name="children" required>
                        @if ($errors->has('children'))
                            <span class="help-block">
                                            <strong>{{ $errors->first('children') }}</strong>
                                        </span>
                        @endif

                    </div>
                </div>

                <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                    <label for="comments" class="control-label">Comments/Notes</label>


                    <textarea class="form-control" name="comments">{{ old('comments') }}</textarea>
                    @if ($errors->has('comments'))
                        <span class="help-block">
                                                <strong>{{ $errors->first('comments') }}</strong>
                                            </span>
                    @endif

                </div>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
            </form>
        </div>
    </div>
</div>

@endsection