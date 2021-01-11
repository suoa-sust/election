@extends('layouts.admin')

{{--@section('styles')--}}
{{--    <!-- Tempusdominus Bbootstrap 4 -->--}}
{{--    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">--}}
{{--@endsection--}}

@section('content')
    <div class="container-fluid">
        <div class="ro.0+9w">
            <div class="col-md-8 col-md-offset-2">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Add New Year</h3>
                    </div>
                    <!-- /.card-header -->
                {{--                    <p class="login-box-msg">Register </p>--}}
                <!-- form start -->
{{--                    <form class="form-horizontal" _lpchecked="1" action="{{ route('postRegister') }}" method="post">--}}
                    <form class="form-horizontal" _lpchecked="1" action="{{route('postYear')}}" method="post">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="year" class="col-sm-2 col-form-label">Election Year</label>
                                <div class="col-sm-10">
                                    <input type="number" name="year" class="form-control" placeholder="2021" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="startdate" class="col-sm-2 col-form-label">Start Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="startdate" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="enddate" class="col-sm-2 col-form-label">End Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="enddate" class="form-control"required>
                                </div>
                            </div>

{{--                            <div class="form-group row">--}}
{{--                                <label class="col-sm-2">Test Date</label>--}}
{{--                                <div class="input-group date col-sm-10" id="enddate" data-target-input="nearest">--}}
{{--                                    <input type="text" class="form-control datetimepicker-input" data-target="#enddate"/>--}}
{{--                                    <div class="input-group-append" data-target="#enddate" data-toggle="datetimepicker">--}}
{{--                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="form-group row">
                                <label for="year" class="col-sm-2 col-form-label">Priority</label>
                                <div class="col-sm-10">
                                    <input type="number" name="year" class="form-control" placeholder="2021" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control">
                                        <option selected="selected" data-select2-id="1">Active</option>
                                        <option data-select2-id="2">Inactive</option>
                                        <option data-select2-id="3">Running</option>
                                        <option data-select2-id="4">Freeze</option>
                                        <option data-select2-id="5">Complete</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">

                            <button type="submit" class="btn btn-info float-right">Add Year</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
            </div>

        </div>
    </div>


@endsection



{{--@section('scripts')--}}

{{--<script src="{{asset('plugins/moment/moment.min.js')}}"></script>--}}
{{--<!-- Tempusdominus Bootstrap 4 -->--}}
{{--<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>--}}
{{--<!-- Page script -->--}}
{{--<script>--}}
{{--    $(function () {--}}
{{--        //Date range picker--}}
{{--        $('#stardate').datetimepicker({--}}
{{--            format: 'L'--}}
{{--        });--}}

{{--        $('#enddate').datetimepicker({--}}
{{--            format: 'L'--}}
{{--        });--}}

{{--    })--}}
{{--</script>--}}
{{--@endsection--}}
