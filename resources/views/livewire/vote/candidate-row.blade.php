<tr :candidate="$candidate">

    <td>{{ $candidate->name }}</td>
    <td class="text-center">
        <button wire:click="updateVote(+5)" class="btn btn-warning btn-sm voteAdd5">+5</button>
    </td>
    <td class="text-center">
        <button wire:click="updateVote(+1)" class="btn btn-primary btn-sm voteAdd1">+1</button>
    </td>
    <td class="text-center">
        <button wire:click="updateVote(-1)" class="btn btn-success btn-sm voteMinus1">-1</button>
    </td>
    <td>{{ $candidate->seat->name }}</td>
    <td>{{ $candidate->number_of_votes }}</td>
    <td>{{ $candidate->designation }}</td>
</tr>

