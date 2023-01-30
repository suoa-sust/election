@extends('layouts.front')
@section('content')

    <br>
    <div class="container">
        <div class="text-center">
            <h3 >শাহজালাল বিশ্ববিদ্যালয় অফিসার্স এসোসিয়েশন নির্বাচন পোর্টাল - এ <br>আপনাকে স্বাগতম</h3>
            <br>
{{--            <h4> নির্বাচনের তারিখ: <span style="color: #904201"><strong>31 জানুয়ারি, 2021 রোজঃ রবিবার</strong></span></h4>--}}
{{--            <h4> ভোটগ্রহণের সময়: <span style="color: #904201"><strong>সকাল ১০ টা থেকে বিকাল ৪ টা পর্যন্ত</strong></span></h4>--}}
{{--            <h1>আর মাত্র</h1>--}}
            @if(isset($year->status))
                @if($year->status == 'ACTIVE')
                <livewire:timer :year="$year"/>
                @elseif($year->status == 'VOTE_RUNNING')
                    <p class="status">ভোট গ্রহণ চলছে</p>
                        <!-- Main content -->
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header" style="display: flex;justify-content: center;">
                                                <div class="card-title">
                                                    <h3 class="text-bold">ভোটার তালিকা (ভোট প্রদানের সর্বশেষ তথ্য)</h3>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div id="donutchart" style="display: block; margin: 0 auto;"></div>
                                                        </div>
{{--                                                        <div class="col-6">--}}
{{--                                                            <h5 class="btn btn-success btn-lg">প্রদান করেছেন: {{ \App\Services\UnicodeConversionService::bn_number($total_voted) }}</h5>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-6">--}}
{{--                                                            <h5 class="btn btn-success btn-lg">প্রদান করেননি: {{ \App\Services\UnicodeConversionService::bn_number($total_voters-$total_voted) }}</h5>--}}
{{--                                                        </div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="example1" class="table table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>ভোটার নম্বর</th>
                                                        <th>নাম</th>
                                                        <th>ভোট প্রদান</th>
                                                        <th>পদবি</th>
                                                        <th>দপ্তর</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($voters as $voter)
                                                            <tr>
                                                                <td>{{ \App\Services\UnicodeConversionService::bn_number($voter->voter_no) }}</td>
                                                                <td>{{ $voter->name }}</td>
                                                                <td style="{{ $voter->vote_status=='NO'?'color:darkorange;':'color:green;' }}">{{ $voter->vote_status=='NO'?'করেননি':'করেছেন' }}</td>
                                                                <td>{{ $voter->designation }}</td>
                                                                <td>{{ $voter->office }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
{{--                                                    <tfoot>--}}
{{--                                                    <tr>--}}
{{--                                                        <th>Rendering engine</th>--}}
{{--                                                        <th>Browser</th>--}}
{{--                                                        <th>Platform(s)</th>--}}
{{--                                                        <th>Engine version</th>--}}
{{--                                                        <th>CSS grade</th>--}}
{{--                                                    </tr>--}}
{{--                                                    </tfoot>--}}
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.content -->
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
            <h4> মোট প্রার্থী: <span style="color: #065632"><strong>২৬ জন</strong></span></h4>
            <h4> মোট ভোটার: <span style="color: #065632"><strong>২৭৩ জন</strong></span></h4>

            <br>
            <br>

{{--            <h5>সর্বশেষ নির্বাচনের তারিখ: <span style="color: #904201"><strong>২১ মার্চ, ২০২২ রোজঃ সোমবার</strong></span></h5>--}}
{{--            <h5> ভোটগ্রহণের সময়: <span style="color: #904201"><strong>সকাল ১০ টা থেকে বিকাল ৩.৩০ টা পর্যন্ত</strong></span></h5>--}}
        </div>
    </div>



@endsection

@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <style>
        .status {
            text-align: center;
            font-size: 40px;
            margin-top: 0px;
            color: darkorange;
        }
    </style>
@endpush

@push('scripts')
    <!-- DataTables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
                order: [[2, 'desc']]
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>

    <!-- Donut Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['ভোট প্রদানের তথ্য', 'সংখ্যা'],
                [' করেননি ', {{ $total_voters-$total_voted }}],
                [' করেছেন ', {{ $total_voted }}]
            ]);

            var options = {
                pieSliceText: 'value',
                title: '',
                pieHole: 0.2,
                legend: { position: 'bottom', alignment: 'center' },
                colors: ['darkorange','green']
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>
@endpush
