@extends('layouts.app') @section('content')

<h1 class="text-center">Make Reservation</h1>
<div class="container">
    <form class="form-horizontal" method="POST" action="{{ route('reservation.store') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Personal Information</div>

                    <div class="panel-body">


                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
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
                        </div>
                        <!-- /input:title -->

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">First name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required> @if ($errors->has('firstname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required> @if ($errors->has('lastname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contact_no') ? ' has-error' : '' }}">
                            <label for="contact_no" class="col-md-4 control-label">Contact Number</label>

                            <div class="col-md-6">
                                <input id="contact_no" type="tel" class="form-control" name="contact_no" required> @if ($errors->has('contact_no'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('contact_no') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fax_no') ? ' has-error' : '' }}">
                            <label for="fax_no" class="col-md-4 control-label">Fax Number</label>

                            <div class="col-md-6">
                                <input id="fax_no" type="tel" class="form-control" name="fax_no"> @if ($errors->has('fax_no'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fax_no') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('addr_line_1') ? ' has-error' : '' }}">
                            <label for="addr_line_1" class="col-md-4 control-label">Address Line 1</label>

                            <div class="col-md-6">
                                <input id="addr_line_1" type="text" class="form-control" name="addr_line_1" required> @if ($errors->has('addr_line_1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('addr_line_1') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('addr_line_2') ? ' has-error' : '' }}">
                            <label for="addr_line_2" class="col-md-4 control-label">Address Line 2</label>

                            <div class="col-md-6">
                                <input id="addr_line_2" type="text" class="form-control" name="addr_line_2" required> @if ($errors->has('addr_line_2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('addr_line_2') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" required> @if ($errors->has('city'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('postal_code') ? ' has-error' : '' }}">
                            <label for="postal_code" class="col-md-4 control-label">Postal code</label>

                            <div class="col-md-2">
                                <input id="postal_code" min="0" type="number" class="form-control" name="postal_code" required> @if ($errors->has('postal_code'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('postal_code') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
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
                        <!-- /input:title -->
                    </div>
                </div>
            </div>
        </div><!-- end personal information -->

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Reservation Information</div>

                    <div class="panel-body">                           
                            <!-- /input:arrival -->

                            <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                                    <label for="duration" class="col-md-4 control-label">Duration of Stay</label>
                                    
    
                                
                                            <div class="col-md-6">
                                                    <input type="text" class="form-control" name="daterange" value="{{ old('duration')}}" required/>
                                                @if ($errors->has('duration'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('duration') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                     
                                </div>

                            <div class="form-group{{ $errors->has('arrival_date') ? ' has-error' : '' }}">
                                <label for="arrival_date" class="col-md-4 control-label">Arrival date</label>

                                <div class="col-md-6">
                                  <input type="text" name="arrival_date"  class="form-control" value="{{ old('arrival_date') }}" readonly/>
                                    @if ($errors->has('arrival_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('arrival_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('departure_date') ? ' has-error' : '' }}">
                                <label for="departure_date" class="col-md-4 control-label">Departure date</label>

                                <div class="col-md-6">
                                    <input id="departure_date" type="text" class="form-control" name="departure_date" value="{{ old('departure_date') }}" readonly/>
                                     @if ($errors->has('departure_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('departure_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('adults') ? ' has-error' : '' }}">
                                <label for="adults" class="col-md-4 control-label">No. of Adults</label>

                                <div class="col-md-6">
                                    <input id="adults" type="number"  class="form-control" value="{{ old('adults')}}" name="adults" required>
                                     @if ($errors->has('adults'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adults') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('children') ? ' has-error' : '' }}">
                                    <label for="children" class="col-md-4 control-label">No. of Children</label>
    
                                    <div class="col-md-6">
                                        <input id="children" type="number" class="form-control" value="{{ old('children')}}" name="children" required>
                                         @if ($errors->has('children'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('children') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                                        <label for="comments" class="col-md-4 control-label">Comments/Notes</label>
        
                                        <div class="col-md-6">
                                            <textarea class="form-control" name="comments" value="{{ old('comments') }}"></textarea>
                                             @if ($errors->has('comments'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('comments') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
    
                         

                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
           <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-lg btn-block btn-primary">
                                <i class="glyphicon glyphicon-lock"></i> Send Reservation 
                            </button>
                        </div>
                    </div>
           </div>
        </div>
        
    </form>
</div>

@endsection