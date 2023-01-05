@extends('layouts.front')
@section('content')
    <br>
    <div class="container">

        <h3 class="text-center">শাহজালাল বিশ্ববিদ্যালয় অফিসার্স এসোসিয়েশন নির্বাচন {{ \App\Services\UnicodeConversionService::bn_number($year->name??$yearName) }}</h3>
        @if(isset($year))

            <div class="">
                <form action="{{ route('past.result') }}" method="GET">
                    <div class="form-inline">


                        <label for="seat" class="col-sm-1 col-form-label">Year</label>
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

            <h5 class="text-center">নির্বাচনের তারিখঃ {{ \App\Services\UnicodeConversionService::bn_date(\Carbon\Carbon::parse($year->election_date)->format('M d, Y')) }}</h5>

            <table class="table table-responsive-xs table-striped">
                <thead>
                <tr>
                    <th>প্রার্থির নাম</th>
                    <th>পদবি</th>
                    <th>পদের নাম</th>
                    <th>প্রাপ্ত ভোট</th>
                    <th>ফলাফল</th>
                </tr>
                </thead>
                <tbody>
                @foreach($candidates as $candidate)
                    <tr>
                        <td>{{ $candidate->name }}</td>
                        <td>{{ $candidate->designation }}</td>
                        <td>{{ $candidate->seat->name_bn }}</td>
                        <td>{{ \App\Services\UnicodeConversionService::bn_number($candidate->number_of_votes) }}</td>
                        <td>
                            @if($candidate->status == 'ELECTED')
                                নির্বাচিত
                            @else
                            --
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <br>
            <h3 class="text-center" style="color: #bf9108;">তথ্য পাওয়া যায় নি</h3>
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
