@extends('layouts.live')
@section('content')
    <div class="text-center">
        <img src="https://www.sust.edu/images/logo.png" width="80px">
        <h1>No LIVE event running now</h1>
{{--        <h3>শাহজালাল ইউনিভার্সিটি অফিসার এসোসিয়েশন নির্বাচন ২০২১</h3>--}}
{{--        <img src="{{ asset('live.gif') }}" width="70px"><livewire:current-time />--}}

        <a class="btn btn-success" href="{{ route('home') }}">Go Back To Home</a>
        <br>
        <br>
        <a class="btn btn-warning btn-lg" href="{{ route('past.result') }}">Click for Results</a>
    </div>

    <br>


@endsection
