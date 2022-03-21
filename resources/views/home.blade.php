@extends('layouts.front')
@section('content')

    <br>
    <div class="container">
        <div class="text-center">
            <h3 >শাহজালাল বিশ্ববিদ্যালয় অফিসার্স এসোসিয়েশন নির্বাচন পোর্টাল - এ <br>আপনাকে স্বাগতম</h3>
            <br>
            <br>

{{--            <h4> নির্বাচনের তারিখ: <span style="color: #904201"><strong>31 জানুয়ারি, 2021 রোজঃ রবিবার</strong></span></h4>--}}
{{--            <h4> ভোটগ্রহণের সময়: <span style="color: #904201"><strong>সকাল ১০ টা থেকে বিকাল ৪ টা পর্যন্ত</strong></span></h4>--}}

            <h4>সর্বশেষ নির্বাচনের তারিখ: <span style="color: #904201"><strong>21 মার্চ, 2022 রোজঃ সোমবার</strong></span></h4>
            <h4> ভোটগ্রহণের সময়: <span style="color: #904201"><strong>সকাল ১০ টা থেকে বিকাল ৩.৩০ টা পর্যন্ত</strong></span></h4>


            <br><br>

{{--            <h1>আর মাত্র</h1>--}}
            @if(isset($year->status))
                @if($year->status == 'ACTIVE')
                <livewire:timer :year="$year"/>
                @elseif($year->status == 'VOTE_RUNNING')
                    <p class="status">ভোট গ্রহণ চলছে</p>
                @elseif($year->status == 'VOTE_COUNT_RUNNING')
                        <p class="status" >ভোট গণনা চলছে</p>
                        <a class="btn btn-success btn-lg" href="{{ route('live') }}">সর্বশেষ প্রাপ্ত ফলাফল এর জন্য ক্লিক করুন</a>
                @elseif($year->status == 'VOTE_COUNT_DONE')
                    <p class="status" >ভোট গণনা সম্পন্ন হয়েছে</p>
                    <a class="btn btn-success btn-lg" href="{{ route('live') }}">ফলাফল দেখুন</a>
                @elseif($year->status == 'VOTE_COUNT_FREEZE')
                    <p class="status" >ভোট গণনা চলছে</p>
                    <a class="btn btn-success btn-lg" href="{{ route('live') }}">সর্বশেষ প্রাপ্ত ফলাফল এর জন্য ক্লিক করুন</a>
                @elseif($year->status == 'COMPLETED')
                    <p class="status" >ফলাফল চূড়ান্ত হয়েছে</p>
                @endif
            @else
                <p class="status" >সর্বশেষ নির্বাচন এর ফলাফল চূড়ান্ত হয়েছে</p>
                <a class="btn btn-success btn-lg" href="{{ route('past.result') }}">সকল ফলাফল দেখুন</a>
            @endif

            <br>
            <br>

            <h4> পদসংখ্যাঃ <span style="color: #065632"><strong>১১ টি</strong></span></h4>
            <h4> মোট প্রার্থী: <span style="color: #065632"><strong>২২ জন</strong></span></h4>
            <h4> মোট ভোটার: <span style="color: #065632"><strong>২৬৪ জন</strong></span></h4>




        </div>




    </div>



@endsection

@push('styles')
    <style>
        .status {
            text-align: center;
            font-size: 60px;
            margin-top: 0px;
            color: darkorange;
        }
    </style>
@endpush
