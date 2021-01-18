<?php

namespace App\Http\Livewire\Result;

use Livewire\Component;

class CandidateSecretary extends Component
{
    public $secretaryCandidates;

    public function mount($secretaryCandidates)
    {
        $this->secretaryCandidates = $secretaryCandidates;
    }
    public function render()
    {
        return view('livewire.result.candidate-secretary');
    }
}
