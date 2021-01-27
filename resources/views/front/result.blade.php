@extends('layouts.front')
@section('content')
    <br>
    <div class="container">

            <h3 class="text-center">শাহজালাল বিশ্ববিদ্যালয় অফিসার্স এসোসিয়েশন নির্বাচন {{ $yearName }}</h3>
            @if(isset($year))

                <h5 class="text-center">নির্বাচনের তারিখঃ {{ \Carbon\Carbon::parse($year->election_date)->format('M d, Y') }}</h5>

                <table class="table table-responsive-xs table-striped">
                    <thead>
                    <tr>
                        <th>Candidate</th>
                        <th>Designation</th>
                        <th>Seat</th>
                        <th>Votes</th>
                        <th>Result</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($candidates as $candidate)
                        <tr>
                            <td>{{ $candidate->name }}</td>
                            <td>{{ $candidate->designation }}</td>
                            <td>{{ $candidate->seat->name }}</td>
                            <td>{{ $candidate->number_of_votes }}</td>
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
