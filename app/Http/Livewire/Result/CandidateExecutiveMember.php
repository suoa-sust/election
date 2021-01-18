<?php

namespace App\Http\Livewire\Result;

use App\Models\Candidate;
use Livewire\Component;

class CandidateExecutiveMember extends Component
{
    public $candidates;

    public function mount($candidates)
    {
        $this->candidates = $candidates;
    }
    public function render()
    {
        return view('livewire.result.candidate-executive-member');
    }
}
