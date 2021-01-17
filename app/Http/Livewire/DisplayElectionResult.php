<?php

namespace App\Http\Livewire;

use App\Models\Candidate;
use Livewire\Component;

class DisplayElectionResult extends Component
{
    public $candidates;

    public $updateNumberOfVotes = false;

    // Special Syntax: ['echo:{channel},{event}' => '{method}']
    protected $listeners = ['echo:candidate,NumberOfVotesUpdated' => 'updateVotes'];

    public function updateVotes()
    {
        $this->updateNumberOfVotes = true;
    }

    public function mount()
    {
        $this->candidates = Candidate::where('year_id', 5)
            ->orderBy('seat_id', 'ASC')
            ->orderBy('number_of_votes', 'DESC')
            ->get();
    }

    public function render()
    {
        return view('livewire.display-election-result');
    }
}
