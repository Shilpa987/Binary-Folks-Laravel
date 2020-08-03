@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Services') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            Whether you are travelling for business or pleasure, the luxury hotel services offered by the five star Hotel Paris make it an ideal choice for your stay in Mumbai, India. The hotel’s luxurious surroundings, comfort, thoughtful touches and a personalized service sets it apart from any other hotel, allowing you to feel like being at home from your very first steps into the hotel.

                            We are geared towards the fulfilment of the needs of any discerning guest and below you can find an alphabetical overview of the most commonly-used services and facilities offered by our boutique hotel.
                            There are a wide range of services provided in our hotel which include Doctor on call,Dry cleaning,Room service (24-hour),Flower arrangement,Ironing service,Computer facility,Pet friendly, at a surcharge
                            Restaurant ,Smoking rooms ,Summer terrace ,Complimentary Wi-Fi internet throughout the entire hotel and many more....


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
