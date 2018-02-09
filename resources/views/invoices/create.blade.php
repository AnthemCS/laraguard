@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col my-3">
                <h3 class="d-flex justify-content-between align-items-center mb-3">
                    <span>Create New Invoice</span>
                    <button id="btnPrint" class="btn btn-primary">Save and Print</button>
                </h3>
                <hr>

            </div>
        </div>
        <div class="row" id="printContents">

            <div class="col">
                <div id="accordion" class="mb-2">
                    <div class="card border-primary">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Business Address and Contact Details, Title, Summary, and Logo</a>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="https://dummyimage.com/300x300/000000/ffffff&text=Lapologa+Logo+Image" alt="Lapologa Logo Image">
                                        <a href="#" class="btn btn-link">Change Logo Image</a>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="">Invoice</label>
                                        <input dir="rtl" type="text" placeholder="Invoice" class="form-control">
                                        <label for="">Summary</label>
                                        <input type="text" placeholder="Summary( e.g description of invoice)" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-primary">
                    <div class="card-body">
                        <div class="row mb-5">
                            <div class="col">
                                <label for="">Guest</label>
                                <input type="text" class="form-control" list="guests">
                                <datalist id="guests">
                                   @foreach($guests as $g)
                                    <option value="{{ $g->fullName }}">
                                   @endforeach
                                </datalist>
                            </div>
                            <div class="col">
                                <label for="">Invoice Date</label>
                                <input type="date" class="form-control" name="invoice_date">
                                <label for="">Due Date</label>
                                <input type="date" class="form-control" name="due_date">
                                <label for="">Partial/Deposit (R)</label>
                                <input type="text" class="form-control" name="deposit">
                            </div>
                            <div class="col">
                                <label for="">Invoice #</label>
                                <input type="tect" class="form-control" name="invoice_number">
                                <label for="">PO #</label>
                                <input type="date" class="form-control" name="po_number">
                                <label for="">Discount (%)</label>
                                <select name="discount" id="" name="discount" class="form-control">
                                    <option value="">Discount 1</option>
                                    <option value="">Discount 2</option>
                                    <option value="">Discount 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="bg-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Item</th>
                                        <th>Description</th>
                                        <th>Unit price (R)</th>
                                        <th>Quantity</th>
                                        <th>Line Total (R)</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>12</td>
                                        <td>
                                            <input type="text" placeholder="Item name" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" placeholder="Item Description" class="form-control">
                                        </td>
                                        <td>
                                            <input type="number" placeholder="Unit Price" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" placeholder="Quantity" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" placeholder="Line Total" class="form-control">
                                        </td>
                                        <td><a class="btn btn-success btn-sm" href="http://localhost:8000/rooms/1"><span data-feather="plus"></span></a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">

                                        </td>
                                        <th colspan="2">
                                           Sub Total (R)
                                        </th>
                                        <td colspan="2">
                                           R400
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">

                                        </td>
                                        <th colspan="2">
                                            Paid to Date
                                        </th>
                                        <td colspan="2">
                                            R200
                                        </td>
                                    </tr>
                                    <tr class="bg-light">
                                        <td colspan="3">

                                        </td>
                                        <th colspan="2">

                                            <h4>Balance Due (R)</h4>
                                        </th>
                                        <td colspan="2">
                                            R200
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                    <address>
                                        <strong>Twitter, Inc.</strong><br>
                                        1355 Market St, Suite 900<br>
                                        San Francisco, CA 94103<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>

                                    <address>
                                        <strong>Full Name</strong><br>
                                        <a href="mailto:#">first.last@example.com</a>
                                    </address>
                            </div>
                            <div class="col-md-8">
                                <label for="">Notes</label>
                                <textarea name="notes" id="" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                      
                    </div>
                </div>

                <div id="footer" class="mt-2">
                    <div class="card border-primary">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <a class="btn btn-link" data-toggle="collapse" data-target="#footer-invoice" aria-expanded="false" aria-controls="footer-invoice"> Footer</a>
                            </h5>
                        </div>

                        <div id="footer-invoice" class="collapse" aria-labelledby="headingOne" data-parent="#footer">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <textarea name="footer" class="form-control" placeholder="Enter a footer for this invoice (e.g. tax information, thank you note)" style="border: 0px solid transparent" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection