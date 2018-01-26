@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col my-3">
                <h3 class="d-flex justify-content-between align-items-center mb-3">
                    <span>Services</span>
                    <a href="{{ route('services.create') }}" class="btn btn-primary">Add a Service</a>
                </h3>
                <hr>

            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h5 class="">Available Services</h5>

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
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <a href="" class="dropdown-item"> <span data-feather="eye"></span> View</a>
                                            <a href="" class="dropdown-item"><span data-feather="edit-2"></span> Edit</a>
                                            <a href="{{ route('services.destroy', $s->id) }}" class="dropdown-item"><span data-feather="trash-2"></span> Delete</a>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>
            <div class="col-md-4">
                <h5 class="">Create a Service</h5>
                <form class="form-horizontal" method="POST" action="{{ route('services.store') }}">
                    {{ csrf_field() }}
                <div class="card border-success">
                    <div class="card-body">

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Name of Service</label>
                                <input id="name" type="text" min="1" class="form-control" name="name" value="{{ old('name') }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class=" control-label">Describe the service</label>

                                <textarea id="description" class="form-control" name="description" placeholder="About your service..." required>{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif

                            </div>


                        <div class="form-group{{ $errors->has('unit_price') ? ' has-error' : '' }}">
                            <label for="unit_price" class="control-label">Unit Price (R)</label>
                            <input id="unit_price" type="number" class="form-control" value="{{ old('unit_price') }}" name="unit_price">
                            @if ($errors->has('unit_price'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('unit_price') }}</strong>
                                </span>
                            @endif

                        </div>
                        {{--//TODO: Add which lodge to assign the room to--}}

                    </div>
                    <div class="card-footer">
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-lg btn-block btn-primary">
                                    <i class="glyphicon glyphicon-lock"></i> Save Service
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                </form>
            </div>
        </div>

        </div>
    </div>
@endsection