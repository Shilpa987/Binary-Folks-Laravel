@extends('layouts.app')
@push('link')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h1>BOOK Your MEAL</h1>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form action="/uc" method="get">
                {{csrf_field()}}

            </form>

            <div class="form-group">
                <label for="Beverages">Beverages:</label>
                <select name="Room Type" id="" class="form-control">
                    <option value="0" selected disabled>Select Beverage</option>
                    <option value="Masala Tea">Masala Tea</option>
                    <option value="Ice Tea">Ice Tea</option>
                    <option value="Cappuccino">Cappuccino</option>
                    <option value="Caffe Mocha">Caffe Mocha</option>
                    <option value="Caffe">Caffe Latte</option>
                    <option value="Cold Drink">Cold Drink</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Breakfast">Breakfast:</label>
                <select name="Breakfast" id="" class="form-control">
                    <option value="0" selected disabled>Select Breakfast Options</option>
                    <option value="English Breakfast">English Breakfast(Fried Eggs,Mushrooms and small sausages)</option>
                    <option value="American Breakfast">American Breakfast(Pancake and Maple Sauce)</option>
                    <option value="Continental Breakfast">Continental breakfast()Toast,jam and scrambled eggs</option>
                    <option value="Viennese breakfast">Viennese Breakfast(Boiled eggs and meat)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Lunch">Lunch:</label>
                <select name="Lunch" id="" class="form-control">
                    <option value="0" selected disabled>Select Lunch Options</option>
                    <option value="Indian Lunch">Indian Lunch</option>
                    <option value="Mexican">Mexican</option>
                    <option value="Vietnamese">Vietnamese</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Thai">Thai</option>
                    <option value="Italian">Italian</option>
                </select>
            </div>
            <div class="mt-2 form-group">
                <input type="submit" value="submit" class="btn btn-primary">
                <input type="reset" value="reset" class="btn btn-secondary">
            </div>
        </div>
    </div>
@endsection

