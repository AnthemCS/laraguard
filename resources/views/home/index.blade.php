@extends('layouts.app')
@section('content')

    <div class="row">


        <div class="col-md-8">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="px-4"><h2>Reservations</h2></li>
                <li class="nav-item">
                    <a class="nav-link active" id="pills-yesterday-tab" data-toggle="pill" href="#pills-yesterday" role="tab" aria-controls="pills-yesterday" aria-selected="true">Yesterday <span class="badge badge-light">45</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-today-tab" data-toggle="pill" href="#pills-today" role="tab" aria-controls="pills-today" aria-selected="false">Today <span class="badge badge-light">12</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-tomorrow-tab" data-toggle="pill" href="#pills-tomorrow" role="tab" aria-controls="pills-tomorrow" aria-selected="false">Tomorrow <span class="badge badge-light">8</span></a>
                </li>
            </ul>
            <hr>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-yesterday" role="tabpanel" aria-labelledby="pills-yesterday-tab">
                    <div class="table-responsive">
                        <table class="table table-hover table-sm">
                            <thead>

                                <th>#</th>
                                <th>Status</th>
                                <th>Arrival</th>
                                <th>Departure</th>
                                <th>Guest</th>
                                <th>Property</th>
                                <th>Nights</th>
                                <th>Comments</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roomReservations as $r)

                                    <tr>
                                        <td>{{ $r->id }}</td>
                                        <td> <span class="badge badge-pill badge-dark">{{ $r->status  }}</span></td>
                                        <td>{{ $r->arrival_date }}</td>
                                        <td>{{ $r->departure_date }}</td>
                                        <td><a href="{{ route('reservations.show',$r->id ) }}">{{ $r->guest->firstname }} {{ $r->guest->lastname }}</a></td>
                                       @if(!is_null($r->rooms))
                                            <td>
                                               @foreach($r->rooms as $room)
                                                <span class="badge badge-pill badge-secondary">{{ $room->id }}</span>
                                               @endforeach
                                       @endif
                                            </td>
                                                <td>{{ $r->nights }}</td>
                                                <td>{{ $r->comments }}</td>
                                        <td><a href="" class="btn btn-outline-success btn-sm">Check-In</a> <a
                                                    href="#print-invoice" class="btn btn-outline-primary btn-sm">Print Invoice</a></td>
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
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

                <div class="tab-pane fade" id="pills-tomorrow" role="tabpanel" aria-labelledby="pills-tomorrow-tab">


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
        <div class="col-md-4 order-md-2 mb-4" >

            <h2 class="d-flex justify-content-between align-items-center mb-3">
                <span class=""> Recent Activity</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h2>
            <div class="card">
                <ul class="list-group mb-3 list-group-flush">
                    <a href="{{ route('home.free-today') }}" class="list-group-item d-flex justify-content-between ">
                        <div class="text-primary">
                            <h3 class="my-0">Today Free</h3>
                            <small>- VAT Included</small>
                        </div>
                        <h4 class="text-primary">34</h4>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Tomorrow Free</h6>
                        </div>
                        <span class="text-muted">12</span>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Arrivals</h6>
                        </div>
                        <span class="text-muted">5</span>
                    </a>
                    <a href="#"  class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Departures</h6>
                        </div>
                        <span class="text-muted">2</span>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Stay Overs</h6>
                        </div>
                        <span class="text-muted">20</span>
                    </a>
                    <a href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Overbookings</h6>
                        </div>
                        <span class="text-muted">2</span>
                    </a>
                </ul>
            </div>



        </div>
    </div>

@endsection


