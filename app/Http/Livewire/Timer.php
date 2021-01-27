<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Timer extends Component
{
    public $year;
//    public function mount($now)
//    {
//        $this->now = Carbon::now();
//    }
    public function render()
    {
        return view('livewire.timer');
    }
}
