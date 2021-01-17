<tr :candidate="$candidate">

    <td>{{ $candidate->name }}</td>
    <td class="text-center">
        <button wire:click="updateVote(+5)" class="btn btn-warning btn-xs voteAdd5">+5</button>
        <button wire:click="updateVote(+1)" class="btn btn-primary btn-xs voteAdd1">+1</button>
        <button wire:click="updateVote(-1)" class="btn btn-success btn-xs voteMinus1">-1</button>
    </td>
    <td>{{ $candidate->seat->name }}</td>
    <td>{{ $candidate->number_of_votes }}</td>
    <td>{{ $candidate->designation }}</td>
</tr>

