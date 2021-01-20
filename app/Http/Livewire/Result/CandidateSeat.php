<?php

namespace App\Http\Livewire\Result;

use Livewire\Component;

class CandidateSeat extends Component
{
    public $candidates ;
    public $seat_name ;

    public function mount($candidates, $seat_name)
    {
        $this->candidates = $candidates;
        $this->seat_name = $seat_name;
    }
    public function render()
    {
        return view('livewire.result.candidate-seat');
    }
}
