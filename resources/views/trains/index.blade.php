@extends('layouts.app')

@section('title', 'Train')

@section('content')
<main>
    <h1>Trains</h1>
    <div class="row">
        @forelse ($trains as $train)
    <div class="col-12 col-lg-4">
        <div class="card-wrapper p-1">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">From: {{ $train->departure_station }}</p>
                    <p class="card-text">To: {{ $train->arrival_station }}</p>
                    <p class="card-text">Departure: {{ $train->departure_time }}</p>
                    <p class="card-text">Arrival: {{ $train->arrival_time }}</p>
                    <p class="card-text">Carriages: {{ $train->number_of_carriages }}</p>
                    @if($train->isCancelled)
                        <p class="card-text">Status: Canceled</p>
                    @elseif($train->isOnTime)
                        <p class="card-text">Status: On Time</p>
                    @else
                        <p class="card-text">Status: Delayed</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@empty
    <div class="col-12">
        <h6>No records found</h6>
        @endforelse

    </div>
    </main>
@endsection