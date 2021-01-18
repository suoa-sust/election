<div :candidates="$candidates">
    <h4>Executive Member</h4>
    <table class="table table-striped table-active">
        <thead>
        <tr>
            <th>Candidate</th>
            <th>Designation</th>
            <th>Votes</th>
        </tr>
        </thead>
        <tbody >
        @foreach($candidates as $candidate)
            <tr>
                <td>{{ $candidate->name }}</td>
                <td>{{ $candidate->designation }}</td>
                <td>{{ $candidate->number_of_votes }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>



