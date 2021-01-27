@extends('layouts.front')
@section('content')

    <br>
    <div class="container">
        <div class="text-center">
            <h3 >শাহজালাল বিশ্ববিদ্যালয় অফিসার্স এসোসিয়েশন নির্বাচন পোর্টাল - এ <br>আপনাকে স্বাগতম</h3>
            <br>
            <br>

            <h4> নির্বাচনের তারিখ: <span style="color: #904201"><strong>31 জানুয়ারি, 2021 রোজঃ রবিবার</strong></span></h4>
            <h4> ভোটগ্রহণের সময়: <span style="color: #904201"><strong>সকাল ১০ টা থেকে বিকাল ৪ টা পর্যন্ত</strong></span></h4>


            <br><br>

{{--            <h1>আর মাত্র</h1>--}}
            <livewire:timer :year="$year"/>
{{--            <h1>বাকী</h1>--}}
            <br>
            <br>

            <h4> পদসংখ্যাঃ <span style="color: #065632"><strong>১১ টি</strong></span></h4>
            <h4> মোট প্রার্থী: <span style="color: #065632"><strong>২২ জন</strong></span></h4>
            <h4> মোট ভোটার: <span style="color: #065632"><strong>২৫৮ জন</strong></span></h4>




        </div>




    </div>



@endsection
