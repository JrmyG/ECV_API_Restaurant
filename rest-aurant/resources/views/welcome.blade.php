@extends('layouts.app')

@section('body')
    <div id="app">
        <slider-component />
    </div>
    <div role="section" class="reservation">
        <div  class="reservationHome">
        <h1>
            Venez tester nos plats !
        </h1>
        <h2> Ce que vous voyez sur Instagram, mangez le en vrai.</h2>
        </div>
        <div class="homeButtons">
    <div class="reservationButton">
        <a href="{{ url('reservations') }}"> Faire une reservation </a>
    </div>

        <div class="platButton">
            <a href="{{ url('plats') }}"> Voir notre menu </a>
        </div>
        </div>
    </div>
@endsection
