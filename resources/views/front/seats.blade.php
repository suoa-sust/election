@extends('layouts.front')
@section('content')

    <br>
    <div class="container">
        <h3 class="text-center">শাহজালাল বিশ্ববিদ্যালয় অফিসার্স এসোসিয়েশন নির্বাচনের আসনসমূহ</h3>
        <h4 class="text-center"> মোট আসন সংখ্যা - ১১ </h4>
        <table  class="table  table-hover table-striped">
            <thead>
            <tr>
                <th>আসন নাম</th>
                <th>সংখ্যা</th>
            </tr>
            </thead>
            <tbody>
            @foreach($seats as $seat)
                <tr>
                    <td>{{ $seat->name_bn }}</td>
                    <td>
                    @if($seat->name_bn == "কার্যনির্বাহী সদস্য")
                        ৬
                        @else
                        ১
                        @endunless
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
