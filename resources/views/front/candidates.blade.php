@extends('layouts.front')
@section('content')
    <br>
    <div class="container">

            <h3 class="text-center">শাহজালাল বিশ্ববিদ্যালয় অফিসার্স এসোসিয়েশন নির্বাচন {{ $yearName?? $year->name }}</h3>
            @if(isset($year))

                <h5 class="text-center"> চূড়ান্ত প্রার্থী তালিকা </h5>

            <div class="">
                <form action="{{ route('public.candidates') }}" method="GET">
                    <div class="form-inline">
{{--                        <label for="seat" class="col-sm-1 col-form-label">Seat*</label>--}}
{{--                        --}}{{--                                    <div class="col-sm-4">--}}
{{--                        <select class="form-control-sm" name="seat_id">--}}
{{--                            <option value="">All</option>--}}
{{--                            @foreach($seats as $id => $name)--}}
{{--                                <option {{ $id == $seat_id ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
                        {{--                                    </div>--}}

                        <label for="seat" class="col-sm-1 col-form-label">Year*</label>
                        {{--                                    <div class="col-sm-4">--}}
                        <select class="form-control-sm" name="year">
{{--                            <option value="">All</option>--}}
                            @foreach($years as $id => $name)
                                <option {{ $name == $year->name ? 'selected' : '' }} value="{{ $name }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        {{--                                    </div>--}}
                        <div style="padding-left: 15px;">
                            <button type="submit" class="btn btn-sm btn-info">Go</button>
                        </div>

                    </div>



                </form>
            </div>

                <table class="table table-responsive-xs table-striped">
                    <thead>
                    <tr>
                        <th>পদের নাম</th>
                        <th>প্রার্থীর নাম</th>
                        <th>পদবী</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $tempSeatName = null;
                    @endphp
                    @foreach($candidates as $candidate)
                        <tr>

                            <td>{{ $tempSeatName == $candidate->seat->name_bn ? '' : $candidate->seat->name_bn }}</td>
                            <td>{{ $candidate->name }}</td>
                            <td>{{ $candidate->designation }}</td>

                            @php
                                $tempSeatName = $candidate->seat->name_bn;
                            @endphp

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <br>
                <h3 class="text-center" style="color: #bf9108;"> তথ্য পাওয়া যায় নি</h3>
            @endif
    </div>



@endsection()

@push('styles')
    <style>
        .table td, .table th {
            padding: 0.60rem;
            vertical-align: top;
            border-top: 0px solid #dee2e6;
        }
    </style>
@endpush
