@extends('layouts.front')
@section('content')
    <br>
    <div class="container">

            <h3 class="text-center">শাহজালাল ইউনিভার্সিটি অফিসার এসোসিয়েশন নির্বাচন {{ $yearName?? $year->name }}</h3>
            @if(isset($year))

                <h5 class="text-center"> চূড়ান্ত প্রার্থী তালিকা </h5>

                <table class="table table-responsive-xs table-striped">
                    <thead>
                    <tr>
                        <th>পদের নাম</th>
                        <th>প্রার্থীর নাম</th>
                        <th>পদবী</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($candidates as $candidate)
                        <tr>
                            <td>{{ $candidate->seat->name_bn }}</td>
                            <td>{{ $candidate->name }}</td>
                            <td>{{ $candidate->designation }}</td>

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
