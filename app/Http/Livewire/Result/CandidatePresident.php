<?php

namespace App\Http\Livewire\Result;

use App\Models\Candidate;
use App\Models\Year;
use Livewire\Component;

class CandidatePresident extends Component
{
    public $presidentialCandidates ;
    public $seat_name ;

    public function mount($presidentialCandidates, $seat_name)
    {
        $this->presidentialCandidates = $presidentialCandidates;
        $this->seat_name = $seat_name;
    }
    public function render()
    {
        return view('livewire.result.candidate-president');
    }
}
