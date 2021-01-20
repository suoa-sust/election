@extends('layouts.front')
@section('content')
    <br>
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">President</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table>
                            @foreach($seatIds as $candidate)
                            <tr>
                                <td> {{ $candidate }}</td>
                                <td> {{ $candidate->number_of_votes }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Collapsable</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>


            <h2>শাহজালাল ইউনিভার্সিটি অফিসার এসোসিয়েশন নির্বাচন ২০২১</h2>
            {{--            <p> </p>--}}

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
{{--                @foreach($candidates as $candidate)--}}
{{--                    <tr>--}}
{{--                        <td>{{ $candidate->name }}</td>--}}
{{--                        <td>{{ $candidate->designation }}</td>--}}
{{--                        <td>{{ $candidate->seat->name }}</td>--}}
{{--                        <td>{{ $candidate->number_of_votes }}</td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
                </tbody>
            </table>
        </div>
    </div>



@endsection()
