<div :presidentialCandidates="$presidentialCandidates">
    <h4> {{ $seat_name }}</h4>
    <table class="table-success table">
        @foreach($presidentialCandidates as $presidentialCandidate)
        <tr>
            <td>{{ $presidentialCandidate->name }}</td>
            <td>{{ $presidentialCandidate->number_of_votes  }}</td>
        </tr>
        @endforeach
    </table>
</div>
