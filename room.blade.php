@extends('layouts.app')
@push('link')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h1>BOOK YOUR STAY</h1>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form action="/uc" method="get">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="Name" placeholder="Name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="Contact" placeholder="Contact" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="Number of person staying" placeholder="Number of person staying" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="Relationship" placeholder="Relationship" class="form-control">
                </div>
            </form>
            <form action="">
                <div class="form-check">
                    <label for="Check In">Check In:</label>
                    <input type="date" id="Check In" name="Check In">
                    <input type="submit">
                </div>
            </form>
            <form action="">
                <div class="form-check">
                    <label for="Check Out">Check Out</label>
                    <input type="date" id="check out" name="check out">
                    <input type="submit">
                </div>
            </form>
            <div class="form-group">
                <label for="Room Type">Room Type:</label>
                <select name="Room Type" id="" class="form-control">
                    <option value="0" selected disabled>Select Room</option>
                    <option value="Single Bed Room">Single Bed Room</option>
                    <option value="Double Bed Room">Double Bed Room</option>
                    <option value="Deluxe">Deluxe</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Payment Options">Payment Options:</label>
                <select name="Payment Options" id="" class="form-control">
                    <option value="0" selected disabled>Select Payment Option</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="Cash">Cash</option>
                    <option value="UPI">Google Pay or Paytm</option>
                </select>
            </div>
            <div class="mt-2 form-group">
                <input type="submit" value="submit" class="btn btn-primary">
                <input type="reset" value="reset" class="btn btn-secondary">
            </div>
        </div>
    </div>
@endsection


