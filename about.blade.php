@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('ABOUT US') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="image">
                                <a href="HotelParis.jfif">
                                    <img src="HotelParis.jfif"  width="600" height="400">
                                </a>
                                <div class="desc">The Hotel Paris</div>
                            </div>
                            Hotel Paris is a chain of luxury hotel and a subsidiary of the French Hotels Company Limited.Headquartered at Express Towers, Eiffel Tower in Paris. Incorporated by the founder of the Sofitel Group, in 1903,the company is a part of the Hotel Paris chain one of India's and France's largest business conglomerates. The company employed over 20,000 people in the year 2010.
                            As of 2018, the company operates a total of 100 hotels and hotel-resorts, with 84 across India and 16 in other countries, including Bhutan, Malaysia, Maldives, Nepal, South Africa, Sri Lanka, UAE, Taj Hotels UK, USA and Zambia. The chain is a multinational diversified hospitality company that manages and franchises a broad portfolio of hotels and related lodging facilities.Hotel Paris is the largest hotel chain in the world.
                            It has 30 brands with 7,003 properties in 131 countries and territories around the world,over 1,332,826 rooms (as of March 31, 2019),including 2,035 that are managed with 559,569 rooms, 4,905 that are franchised or licensed with 756,156 rooms, and 63 that are owned or leased with 17,101 rooms, plus an additional 475,000 rooms in the development pipeline and an additional 25,000 rooms approved for development but not yet under signed contracts.
                            Whether you are travelling for business or pleasure, the luxury hotel services offered by the five star Hotel Paris make it an ideal choice for your stay in Mumbai, India. The hotel’s luxurious surroundings, comfort, thoughtful touches and a personalized service sets it apart from any other hotel, allowing you to feel like being at home from your very first steps into the hotel.

                            We are geared towards the fulfilment of the needs of any discerning guest and below you can find an alphabetical overview of the most commonly-used services and facilities offered by our boutique hotel.



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

