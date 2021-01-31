<?php

namespace App\Http\Livewire;

use App\Models\Candidate;
use App\Models\Seat;
use App\Models\Year;
use Livewire\Component;

class DisplayElectionResult extends Component
{
    public $candidates;
    public $seats;
    public $year;
    public $presidentialCandidates;
    public $secretaryCandidates;

    public $updateNumberOfVotes = false;

    // Special Syntax: ['echo:{channel},{event}' => '{method}']
//    protected $listeners = ['echo:candidate,NumberOfVotesUpdated' => 'updateVotes'];
//    protected $listeners = ['refreshComponent' => '$refresh'];

    public function updateVotes()
    {
        $this->updateNumberOfVotes = true;
    }

    public function mount()
    {
        $this->year = Year::whereIn('status', [ 'VOTE_COUNT_FREEZE',  'VOTE_COUNT_DONE', 'VOTE_COUNT_RUNNING'])->first();
//        $this->candidates = Candidate::where('year_id', $year->id)
//            ->orderBy('seat_id', 'ASC')
//            ->orderBy('number_of_votes', 'DESC')
//            ->get();
//        $this->year = Year::where('status', '=', 'VOTE_RUNNING')->first();
//        $this->seats = Seat::where('status', 'ACTIVE')->orderBy('priority', 'ASC')->get();
//        $year = Year::where('status', '=', 'VOTE_RUNNING')->first();
//        $candidates =  Candidate::where('year_id', $year->id)
//            ->orderBy('seat_id', 'ASC')
//            ->orderBy('number_of_votes', 'DESC')
////            ->get();
        $this->seats = isset($this->year) ? Seat::where('status', 'ACTIVE')->orderBy('priority', 'ASC')->get() : [];
//        foreach ($seats as $seat) {
////            if($seat->name == 'সভাপতি') {
////                $this->presidentialCandidates = $seat->candidatesByYear($year->id);
////            }
////            if($seat->name == 'সাধারণ সম্পাদক') {
////                $this->secretaryCandidates = $seat->candidatesByYear($year->id);
////            }
//
//        }

    }

    private function bindingData()
    {
//        $year = Year::where('status', '=', 'VOTE_RUNNING')->first();
////        $candidates =  Candidate::where('year_id', $year->id)
////            ->orderBy('seat_id', 'ASC')
////            ->orderBy('number_of_votes', 'DESC')
////            ->get();
//        $seats = Seat::where('status', 'ACTIVE')->orderBy('priority', 'ASC')->get();
//        foreach ($seats as $seat) {
//            if($seat->name == 'সভাপতি') {
//                $this->presidentialCandidates = $seat->candidatesByYear($year->id);
//            }
//            if($seat->name == 'সাধারণ সম্পাদক') {
//                $this->secretaryCandidates = $seat->candidatesByYear($year->id);
//            }
//
//        }

    }

    public function render()
    {
        return view('livewire.display-election-result');
    }
}
