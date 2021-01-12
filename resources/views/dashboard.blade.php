@extends('layouts.admin')
@section('content')

    <h3>Welcome to Dashboard</h3>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-chair"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Election Seat</span>
                    <span class="info-box-number">
                  {{ $number_of_seat }}
{{--                  <small>%</small>--}}
                </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Unique Candidates so far</span>
                    <span class="info-box-number">{{ $number_of_unique_candidate }}</span>
                </div>
            </div>
        </div>

    </div>



@endsection

