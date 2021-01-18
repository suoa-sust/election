<?php

namespace App\Http\Livewire;

use App\Events\NumberOfVotesUpdated;
use App\Models\Candidate;
use App\Models\Year;
use Livewire\Component;

class VoteCount extends Component
{
    public $candidates;

    public function mount()
    {
        $year = Year::where('status', '=', 'VOTE_RUNNING')->first();
        $this->candidates = isset($year) ? Candidate::where('year_id', $year->id)
            ->orderBy('seat_id', 'ASC')
            ->get() : [];
    }

    public function render()
    {
        return view('livewire.vote-count');
    }
}
