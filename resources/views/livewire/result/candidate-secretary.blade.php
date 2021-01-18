<div :secretaryCandidates="$secretaryCandidates">
    <h4>Secretary</h4>
    <table class="table table-info">
        @foreach($secretaryCandidates as $secretaryCandidate)
            <tr>
                <td>{{ $secretaryCandidate->name }}</td>
                <td>{{ $secretaryCandidate->number_of_votes  }}</td>
            </tr>
        @endforeach
    </table>
</div>
