@extends('layouts.live')
@section('content')

    <h2>শাহজালাল ইউনিভার্সিটি অফিসার এসোসিয়েশন নির্বাচন ২০২১</h2>
    <br>
    <livewire:current-time />
    <img src="{{ asset('live.gif') }}" width="50px">
    <livewire:display-election-result />


@endsection
