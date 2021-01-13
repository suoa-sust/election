@extends('layouts.front')
@section('content')
    <br><br>
    <div class="container">
        <div class="row">
            <h2>শাহজালাল ইউনিভার্সিটি অফিসার এসোসিয়েশন নির্বাচন ২০২১</h2>

            <table  class="table  table-hover table-responsive-sm table-striped">
                <thead>
                <tr>
                    <th>Candidate</th>
                    <th>Designation</th>
                    <th>Seat</th>
                    <th>Votes</th>
                </tr>
                </thead>
                <tbody>
                @foreach($candidates as $candidate)
                    <tr>
                        <td>{{ $candidate->name }}</td>
                        <td>{{ $candidate->designation }}</td>
                        <td>{{ $candidate->seat->name }}</td>
                        <td>{{ $candidate->number_of_votes }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



@endsection()
