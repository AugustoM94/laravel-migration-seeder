@extends('layouts.app')

@section('title', 'Train')

@section('content')
<main>
    <h1>Trains Departing Today</h1>
    <div class="row">
        @forelse ($trains as $train)
    <div class="col-12 col-lg-4">
        <div class="card-wrapper p-1">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Train Code: {{ $train->train_code }}</p>
                    <p class="card-text">On Time: {{ $train->isOnTime ? 'Yes' : 'No' }}</p>
                    <p class="card-text">Cancelled: {{ $train->isCancelled ? 'Yes' : 'No' }}</p>
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