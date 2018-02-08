@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col my-3">
                <h3 class="d-flex justify-content-between align-items-center mb-3">
                    <span>Guest</span>
                    <a href="{{ route('guests.create') }}" class="btn btn-primary">Add a Guest</a>
                </h3>
                <hr>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h5 class="">Guest listing</h5>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name </th>
                        <th>Contact details</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($guests as $g)
                        <tr>
                            <td>{{ $g->id }}</td>
                            <td>{{ $g->fullName }}</td>
                            <td>{{ $g->contactDetails }}</td>
                            <td>{{ $g->fullAddress }}</td>
                            <td>
                                Status of Guest
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a href="" class="dropdown-item"> <span data-feather="eye"></span> View</a>
                                        <a href="" class="dropdown-item"><span data-feather="edit-2"></span> Edit</a>
                                        <a href="{{ route('services.destroy', $g->id) }}" class="dropdown-item"><span data-feather="trash-2"></span> Delete</a>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
    </div>
@endsection