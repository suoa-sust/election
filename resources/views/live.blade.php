@extends('layouts.live')
@section('content')
    <div class="text-center">
        <img src="https://www.sust.edu/images/logo.png" width="80px">
        <h3>শাহজালাল ইউনিভার্সিটি অফিসার এসোসিয়েশন নির্বাচন ২০২১</h3>
        <img src="{{ asset('live.gif') }}" width="70px"><livewire:current-time />
    </div>

    <br>
    <livewire:display-election-result />


@endsection
