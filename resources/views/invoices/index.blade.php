@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col my-3">
                <h3 class="d-flex justify-content-between align-items-center mb-3">
                    <span>Invoices <span class="badge badge-primary"></span> </span>
                    <a href="{{ route('invoices.create') }}" class="btn btn-outline-primary">Create an Invoice</a>
                </h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="" method="GET" class="form">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group{{ $errors->has('guest') ? ' has-error' : '' }} col-md-2">

                            <select name="guest" class="form-control form-control-lg" id="guest" required autofocus>
                                <option value="" selected> All Guests</option>
                                <option value="mr">Guest 1</option>
                                <option value="mrs">Guest 2</option>
                                <option value="miss">Guest 3</option>
                            </select>
                        </div>
                        <!-- /input:title -->
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }} col-md-2">
                            <select name="guest" class="form-control form-control-lg" id="guest" required autofocus>

                                <option value="*">All Statuses</option>
                                @foreach($statuses as $status)
                                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }} col-md-5">

                            <input type="text" class="form-control form-control-lg" name="daterange" value="{{ old('duration')}}" required/>
                            @if ($errors->has('duration'))
                                <span class="help-block">
                            <strong>{{ $errors->first('duration') }}</strong>
                        </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('res_no') ? ' has-error' : '' }} col">
                            <input id="res_no" type="text" value="{{ old('res_no') }}" placeholder="Enter #" class="form-control form-control-lg" name="res_no" required>
                            @if ($errors->has('res_no'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('res_no') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col">
                            <button class="btn btn-lg btn-primary">Apply Filters</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-all-invoices-tab" data-toggle="pill" href="#pills-all-invoices" role="tab" aria-controls="pills-all-invoices" aria-selected="true">All Invoices <span class="badge badge-primary">45</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-today-tab" data-toggle="pill" href="#pills-today" role="tab" aria-controls="pills-today" aria-selected="false">Today <span class="badge badge-light">12</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-drafts-tab" data-toggle="pill" href="#pills-drafts" role="tab" aria-controls="pills-drafts" aria-selected="false">Darfts <span class="badge badge-light">8</span></a>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-all-invoices" role="tabpanel" aria-labelledby="pills-all-invoices-tab">

                            <table class="table table-hover table-sm">
                                <thead>
                                <th>#</th>
                                <th>Due	Date</th>
                                <th>Guest</th>
                                <th>Amount Due</th>
                                <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--@foreach($rsvs as $r)--}}

                                    <tr>


                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="row">
                                            <a href="" class="btn btn-link" >Send Invoice</a>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <a href="" class="dropdown-item"> <span data-feather="eye"></span> View</a>
                                                    <a href="" class="dropdown-item"><span data-feather="edit-2"></span> Edit</a>
                                                    <a href="" class="dropdown-item"><span data-feather="trash-2"></span> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </a>
                                {{--@endforeach--}}
                                </tbody>
                            </table>

                    </div>
                    <div class="tab-pane fade" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">

                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1,001</td>
                                    <td>Lorem</td>
                                    <td>ipsum</td>
                                    <td>dolor</td>
                                    <td>sit</td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>amet</td>
                                    <td>consectetur</td>
                                    <td>adipiscing</td>
                                    <td>elit</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>Integer</td>
                                    <td>nec</td>
                                    <td>odio</td>
                                    <td>Praesent</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>libero</td>
                                    <td>Sed</td>
                                    <td>cursus</td>
                                    <td>ante</td>
                                </tr>
                                <tr>
                                    <td>1,004</td>
                                    <td>dapibus</td>
                                    <td>diam</td>
                                    <td>Sed</td>
                                    <td>nisi</td>
                                </tr>
                                <tr>
                                    <td>1,005</td>
                                    <td>Nulla</td>
                                    <td>quis</td>
                                    <td>sem</td>
                                    <td>at</td>
                                </tr>
                                <tr>
                                    <td>1,006</td>
                                    <td>nibh</td>
                                    <td>elementum</td>
                                    <td>imperdiet</td>
                                    <td>Duis</td>
                                </tr>
                                <tr>
                                    <td>1,007</td>
                                    <td>sagittis</td>
                                    <td>ipsum</td>
                                    <td>Praesent</td>
                                    <td>mauris</td>
                                </tr>
                                <tr>
                                    <td>1,008</td>
                                    <td>Fusce</td>
                                    <td>nec</td>
                                    <td>tellus</td>
                                    <td>sed</td>
                                </tr>
                                <tr>
                                    <td>1,009</td>
                                    <td>augue</td>
                                    <td>semper</td>
                                    <td>porta</td>
                                    <td>Mauris</td>
                                </tr>
                                <tr>
                                    <td>1,010</td>
                                    <td>massa</td>
                                    <td>Vestibulum</td>
                                    <td>lacinia</td>
                                    <td>arcu</td>
                                </tr>
                                <tr>
                                    <td>1,011</td>
                                    <td>eget</td>
                                    <td>nulla</td>
                                    <td>Class</td>
                                    <td>aptent</td>
                                </tr>
                                <tr>
                                    <td>1,012</td>
                                    <td>taciti</td>
                                    <td>sociosqu</td>
                                    <td>ad</td>
                                    <td>litora</td>
                                </tr>
                                <tr>
                                    <td>1,013</td>
                                    <td>torquent</td>
                                    <td>per</td>
                                    <td>conubia</td>
                                    <td>nostra</td>
                                </tr>
                                <tr>
                                    <td>1,014</td>
                                    <td>per</td>
                                    <td>inceptos</td>
                                    <td>himenaeos</td>
                                    <td>Curabitur</td>
                                </tr>
                                <tr>
                                    <td>1,015</td>
                                    <td>sodales</td>
                                    <td>ligula</td>
                                    <td>in</td>
                                    <td>libero</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-drafts" role="tabpanel" aria-labelledby="pills-drafts-tab">


                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1,001</td>
                                    <td>Lorem</td>
                                    <td>ipsum</td>
                                    <td>dolor</td>
                                    <td>sit</td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>amet</td>
                                    <td>consectetur</td>
                                    <td>adipiscing</td>
                                    <td>elit</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>Integer</td>
                                    <td>nec</td>
                                    <td>odio</td>
                                    <td>Praesent</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>libero</td>
                                    <td>Sed</td>
                                    <td>cursus</td>
                                    <td>ante</td>
                                </tr>
                                <tr>
                                    <td>1,004</td>
                                    <td>dapibus</td>
                                    <td>diam</td>
                                    <td>Sed</td>
                                    <td>nisi</td>
                                </tr>
                                <tr>
                                    <td>1,005</td>
                                    <td>Nulla</td>
                                    <td>quis</td>
                                    <td>sem</td>
                                    <td>at</td>
                                </tr>
                                <tr>
                                    <td>1,006</td>
                                    <td>nibh</td>
                                    <td>elementum</td>
                                    <td>imperdiet</td>
                                    <td>Duis</td>
                                </tr>
                                <tr>
                                    <td>1,007</td>
                                    <td>sagittis</td>
                                    <td>ipsum</td>
                                    <td>Praesent</td>
                                    <td>mauris</td>
                                </tr>
                                <tr>
                                    <td>1,008</td>
                                    <td>Fusce</td>
                                    <td>nec</td>
                                    <td>tellus</td>
                                    <td>sed</td>
                                </tr>
                                <tr>
                                    <td>1,009</td>
                                    <td>augue</td>
                                    <td>semper</td>
                                    <td>porta</td>
                                    <td>Mauris</td>
                                </tr>
                                <tr>
                                    <td>1,010</td>
                                    <td>massa</td>
                                    <td>Vestibulum</td>
                                    <td>lacinia</td>
                                    <td>arcu</td>
                                </tr>
                                <tr>
                                    <td>1,011</td>
                                    <td>eget</td>
                                    <td>nulla</td>
                                    <td>Class</td>
                                    <td>aptent</td>
                                </tr>
                                <tr>
                                    <td>1,012</td>
                                    <td>taciti</td>
                                    <td>sociosqu</td>
                                    <td>ad</td>
                                    <td>litora</td>
                                </tr>
                                <tr>
                                    <td>1,013</td>
                                    <td>torquent</td>
                                    <td>per</td>
                                    <td>conubia</td>
                                    <td>nostra</td>
                                </tr>
                                <tr>
                                    <td>1,014</td>
                                    <td>per</td>
                                    <td>inceptos</td>
                                    <td>himenaeos</td>
                                    <td>Curabitur</td>
                                </tr>
                                <tr>
                                    <td>1,015</td>
                                    <td>sodales</td>
                                    <td>ligula</td>
                                    <td>in</td>
                                    <td>libero</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection