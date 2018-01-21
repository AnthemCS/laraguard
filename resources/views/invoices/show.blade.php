@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col my-5">
                <h3> Guest Name</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque ea enim ipsa iure libero maxime numquam perspiciatis praesentium quae, qui quia, quibusdam rem saepe suscipit tempore temporibus vitae voluptates?</p>

            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-group">
                    <div class="card border-primary">
                        <div class="card-header">
                            <h4>Booking Details</h4>
                        </div>
                        <div class="card-body">

                            <ul class="list-group mb-3 list-group-flush">

                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Name</h6>
                                    </div>
                                    <span class="text-muted">Guest name</span>
                                </li>
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Mobile</h6>
                                    </div>
                                    <span class="text-muted">Contact Number</span>
                                </li>
                                <li href="#"  class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">E-mail</h6>
                                    </div>
                                    <span class="text-muted">email&email.com</span>
                                </li>
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Arrival date</h6>
                                    </div>
                                    <span class="text-muted">20 Jun 1023</span>
                                </li>
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Departure</h6>
                                    </div>
                                    <span class="text-muted">21 Jun 2013</span>
                                </li>
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Duration</h6>
                                    </div>
                                    <span class="text-muted">21 Jun 2013</span>
                                </li>
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">No. of guests</h6>
                                    </div>
                                    <span class="text-muted">5</span>
                                </li>
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Status</h6>
                                    </div>
                                    <span class="text-muted">
                                       <select class="form-control" name="" id="">
                                         <option value="">Check-In</option>
                                           <option value="">Check-Out</option>
                                       </select>
                                  </span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <form action="">
                                <div class="form-row">
                                    <button class="btn btn-block btn-lg btn-outline-success">
                                        Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card border-primary">
                        <div class="card-header">
                            <h4>Invoice Details</h4>
                        </div>
                        <div class="card-body">

                            <ul class="list-group mb-3 list-group-flush">
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Payment Method</h6>
                                    </div>
                                    <span class="text-muted">
                                       <select class="form-control" name="" id="">
                                         <option value="">Cash out</option>
                                           <option value="">Credit Card</option>
                                       </select>
                                  </span>
                                </li>
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6>Billing</h6>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                <th>#</th>
                                                <th>Description</th>
                                                <th>Quality</th>
                                                <th>Unit price</th>
                                                <th>Total</th>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>5</th>
                                                    <td>Room number</td>
                                                    <td>2</td>
                                                    <td>R 656</td>
                                                    <td>R 1200</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </li>
                                <li href="#" class="list-group-item d-flex bg-light justify-content-between lh-condensed">
                                    <div>
                                        <h4 class="my-0">Total</h4>
                                    </div>
                                    <h5 class="text-muted">R 7878</h5>
                                </li>
                                <li href="#"  class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Amount Paid</h6>
                                    </div>
                                    <span class="text-muted">R 1000</span>
                                </li>
                                <li href="#" class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Discount</h6>
                                    </div>
                                    <span class="text-muted">5%</span>
                                </li>
                                <li href="#" class="list-group-item d-flex bg-light justify-content-between lh-condensed">
                                    <div>
                                        <h4 class="my-0">Balance</h4>
                                    </div>
                                    <h5 class="text-muted">R 678</h5>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <form action="">
                                <div class="form-row">
                                    <button class="btn btn-block btn-lg btn-outline-success">
                                        Make Payment
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection