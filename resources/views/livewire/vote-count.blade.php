<div class="card-body" :candidates="$candidates">
    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>+</th>
            <th>+</th>
            <th>-</th>
            <th>Seat</th>
            <th>Votes</th>
            <th>Designation</th>
        </tr>
        </thead>
        <tbody>

        @foreach($candidates as $candidate)
            @livewire('vote.candidate-row', ['candidate' => $candidate])
        @endforeach
        </tbody>

    </table>
</div>
