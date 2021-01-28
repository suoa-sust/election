<div wire:poll.keep>

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
