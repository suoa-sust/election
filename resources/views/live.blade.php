@extends('layouts.live')
@section('content')
    <div class="text-center">
        <img src="https://www.sust.edu/images/logo.png" width="80px">
        <h3>শাহজালাল বিশ্ববিদ্যালয় অফিসার্স এসোসিয়েশন নির্বাচন ২০২১</h3>

        <livewire:current-time /><img src="{{ asset('live.gif') }}" width="70px" style="padding-bottom: 6px;">
    </div>

    <br>
    <livewire:display-election-result />
    @include('partials.footer4')
@endsection
