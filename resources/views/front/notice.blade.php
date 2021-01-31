@extends('layouts.front')
@section('content')

    <br>
    <div class="container">
        <div class="text-center">
            <h3 > শাহজালাল ইউনিভার্সিটি অফিসার এসোসিয়েশন নির্বাচন সংক্রান্ত বিজ্ঞপ্তি সমূহ</h3>
<br>
<br>
{{--            <h4>আগামী নির্বাচনের তারিখ</h4>--}}

{{--            <h2 style="color: #904201"><strong>31 জানুয়ারি, 2021</strong></h2>--}}

{{--            <div class="row">--}}
{{--                <div class="col-md-4">--}}
{{--                    <a target="_blank" href="{{ asset('') }}">নোটিস</a>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <a target="_blank" href="{{ asset('') }}">নোটিস</a>--}}
{{--                </div>--}}
{{--            </div>--}}

            <table  class="table  table-hover table-responsive-sm table-striped">
                <thead>
                <tr>
                    <th>নম্বর</th>
                    <th>তারিখ</th>
                    <th>বিবরণ</th>
                    <th>লিঙ্ক</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> ৪.</td>
                        <td>৩১/০১/২০২১</td>
                        <td>
                            শাবিঅএ নির্বাচন ২০২১ এর চূড়ান্ত ফলাফল প্রকাশ
                        </td>
                        <td>
                            <a style="color: darkred" target="_blank" href="{{ asset('files/notices/Final-Result-Sheet-SUOA-Election-2021.pdf') }}"><i class="fa fa-2x fa-file-pdf"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td> ৩.</td>
                        <td>২১/০১/২০২১</td>
                        <td>
                            শাবিঅএ নির্বাচন এর প্রাথমিক প্রার্থী তালিকা
                        </td>
                        <td>
                            <a style="color: darkred" target="_blank" href="{{ asset('files/notices/11-Primary-Candidates-List.pdf') }}"><i class="fa fa-2x fa-file-pdf"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td> ২.</td>
                        <td>১২/০১/২০২১</td>
                        <td>
                            শাবিঅএ নির্বাচনের পদ সমুহের নোটিশ
                        </td>
                        <td>
                            <a target="_blank" style="color: darkred" href="{{ asset('files/notices/10-Notice-for-Post.pdf') }}"><i class="fa fa-2x fa-file-pdf"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td> ১.</td>
                        <td>১২/০১/২০২১</td>
                        <td>
                            শাবিঅএ নির্বাচন ২০২১ এর চুড়ান্ত ভোটার তালিকা
                        </td>
                        <td>
                            <a style="color: darkred" target="_blank" href="{{ asset('files/notices/9-Final-Voter-List.pdf') }}">
                                <i class="fa fa-2x fa-file-pdf"></i>
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>



        </div>




    </div>



@endsection
