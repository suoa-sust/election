
{{--@extends('layouts.live')--}}
{{--@section('content')--}}
{{--    <br><br>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <h2>শাহজালাল ইউনিভার্সিটি অফিসার এসোসিয়েশন নির্বাচন ২০২১</h2>--}}

{{--            <table  class="table  table-hover table-responsive-sm table-striped">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>Candidate</th>--}}
{{--                    <th>Designation</th>--}}
{{--                    <th>Seat</th>--}}
{{--                    <th>Votes</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($candidates as $candidate)--}}
{{--                    <tr>--}}
{{--                        <td>{{ $candidate->name }}</td>--}}
{{--                        <td>{{ $candidate->designation }}</td>--}}
{{--                        <td>{{ $candidate->seat->name }}</td>--}}
{{--                        <td>{{ $candidate->number_of_votes }}</td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}



{{--@endsection()--}}

{{--@section('scripts')--}}
{{--    <script>--}}
{{--        Echo.channel('candidates')--}}
{{--            .listen('RealTimeMessage', (e) => console.log('RealTimeMessage: ' + e.message));--}}
{{--    </script>--}}

{{--@endsection--}}


    <!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('13cde042993af9adab3e', {
            cluster: 'ap2'
        });

        var channel = pusher.subscribe('candidate');
        channel.bind('App\\Events\\NumberOfVotesUpdated', function(data) {
            console.log(data);
            document.getElementById('update').innerText = data.candidate.number_of_votes;
            // alert(JSON.stringify(data));
        });
    </script>
</head>
<body>
<h1>Pusher Test</h1>
<p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <h1 id="update">my-event</h1>.
</p>
</body>

