<div wire:poll>
    @if($year->status == 'VOTE_COUNT_FREEZE')
        <div class="blink_me text-center pb-2">
{{--        <div class="making-it-scroll">--}}
            <span style="color: #90130a;font-weight: bold">ফলাফল ফ্রিজ করা হয়েছে। চুড়ান্ত ফলাফল নির্বাচন কমিশন এর ঘোষনার পর হালনাগাদ করা হবে।</span>
        </div>
    @elseif($year->status == 'VOTE_COUNT_DONE')
        <div class="blink_me text-center pb-2">
            <span style="color: #90130a;font-weight: bold">নিম্নে প্রদর্শিত ফলাফল নির্বাচন কমিশন কর্তৃক চুড়ান্ত হয়েছে।</span>
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @foreach($seats as $seat)
                    @unless($seat->name == 'Executive Member')
                        <div>

                            @if($seat->name == 'President')
                                <h4 style="font-weight: bold;"> {{ $seat->name_bn }}</h4>
                                <table class="table-warning table">
                            @elseif($seat->name == 'Vice President')
                                <h4> {{ $seat->name_bn }}</h4>
                                <table class="table-primary table">
                            @elseif($seat->name == 'Treasurer')
                                <h4> {{ $seat->name_bn }}</h4>
                                <table class="table-info table">
                            @elseif($seat->name == 'General Secretary')
                                <h4 style="font-weight: bold;"> {{ $seat->name_bn }}</h4>
                                <table class="table-success table">
                            @elseif($seat->name == 'Assistant General Secretary')
                                <h4> {{ $seat->name_bn }}</h4>
                                <table class="table-primary table">
                            @endif
                                @foreach(collect($seat->candidates->where('year_id', $year->id))->sortByDesc('number_of_votes') as $candidate)
                                    <tr>
                                        <td >{{ $candidate->name }}</td>
                                        <td >{{ $candidate->designation }}</td>
                                        <td style="font-size: medium"><strong>{{ $candidate->number_of_votes  }}</strong></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>

                    @endunless
                @endforeach


            </div>

            <div class="col-md-6">
                @foreach($seats as $seat)
                    @if($seat->name == 'Executive Member')
                        <div>
                            <h4> {{ $seat->name_bn }}</h4>
                            <table class="table-active table">
                                @foreach(collect($seat->candidates->where('year_id', $year->id))->sortByDesc('number_of_votes') as $candidate)
                                    <tr>
                                        <td>{{ $candidate->name }}</td>
                                        <td>{{ $candidate->designation  }}</td>
                                        <td><strong>{{ $candidate->number_of_votes  }}</strong></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @endif
                @endforeach
            </div>


        </div>
    </div>


</div>
