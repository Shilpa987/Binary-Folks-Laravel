@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('CONTACT &') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            Hotel Paris is located in the quiet centre of Mumbai,India. It is surrounded by prestigious UNESCO World Heritage monuments, central to major city tourism objects, shopping streets, corporate offices and embassies.

                            Such sightseeing objects as the Gateway of India, Chhatrapati Shivaji Maharaj Terminus, Taj Mahal Palace, Elephanta Caves, Haji Ali Dargah, Rajabai Clock Tower, Siddhivinayak Temple, Kanheri Caves, Tower of Silence and many other tourist attractions in Mumbai are within a 7 minute leisurely walk.

                            The easiest access to the hotel by car is through Gateway of India. After entering the park lane near Gateway of India, turn to the right on Shivaji Street and you’ll see the hotel on the left hand side. Upon availability, valet parking is available directly by the hotel.

                            Hotel Paris
                            Address:
                            30th Cross Road, Park Lane,Near Gateway of India, Bandra West Mumbai, Maharashtra 400050
                            E-mail: info@hotelparis.com

                            Driving directions:
                            (GPS coordinates – 56.9502 N, 24.1029 E)

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
