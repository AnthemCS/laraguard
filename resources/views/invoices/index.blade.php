@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col my-3">
                <h3 class="d-flex justify-content-between align-items-center mb-3">
                    <span>Invoices</span>
                    <a href="{{ route('invoices.create') }}" class="btn btn-primary">Create Invoice</a>
                </h3>
                <hr>

            </div>
        </div>
    </div>
@endsection