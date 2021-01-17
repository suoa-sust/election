<div :candidates="$candidates">
    <h4> {{ $seat_name }}</h4>
    <table class="table-success table">
        @foreach($candidates as $candidate)
            <tr>
                <td>{{ $candidate->name }}</td>
                <td>{{ $candidate->number_of_votes  }}</td>
            </tr>
        @endforeach
    </table>
</div>
