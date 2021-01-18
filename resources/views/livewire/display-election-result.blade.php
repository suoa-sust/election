<div wire:poll >

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @foreach($seats as $seat)
                    @unless($seat->name == 'কার্যনির্বাহী সদস্য')
                        <div>
                            <h4> {{ $seat->name }}</h4>
                            @if($seat->name == 'সভাপতি')
                                <table class="table-warning table">
                            @elseif($seat->name == 'সহ-সভাপতি')
                                <table class="table-primary table">
                            @elseif($seat->name == 'কোষাধ্যক্ষ')
                                <table class="table-info table">
                            @elseif($seat->name == 'সাধারণ সম্পাদক')
                                <table class="table-success table">
                            @elseif($seat->name == 'সহ-সাধারণ সম্পাদক')
                                <table class="table-primary table">
                            @endif
                                @foreach(collect($seat->candidates->where('year_id', $year->id))->sortByDesc('number_of_votes') as $candidate)
                                    <tr>
                                        <td>{{ $candidate->name }}</td>
                                        <td>{{ $candidate->designation }}</td>
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
                    @if($seat->name == 'কার্যনির্বাহী সদস্য')
                        <div>
                            <h4> {{ $seat->name }}</h4>
                            <table class="table-active table">
                                @foreach($seat->candidates->where('year_id', $year->id) as $candidate)
                                    <tr>
                                        <td>{{ $candidate->name }}</td>
                                        <td>{{ $candidate->designation  }}</td>
                                        <td><strong>{{ $candidate->number_of_votes  }}</strong></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @endunless
                @endforeach
            </div>


        </div>
    </div>


</div>
