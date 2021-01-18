@extends('layouts.admin')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $title ?? 'Edit Year' }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('year.index') }}">Year</a></li>
                        <li class="breadcrumb-item active">Edit Year</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        {{--                        <h3 class="card-title">Add New Year</h3>--}}
                    </div>

                    <!-- form start -->
                    <form class="form-horizontal" action="{{route('year.update', $year->id)}}" method="post">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Election Year</label>
                                <div class="col-sm-10">
                                    <input type="number" name="name" class="form-control" placeholder="2021" required value="{{$year->name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="election_date" class="col-sm-2 col-form-label">Election Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="election_date" class="form-control" required value="{{$year->election_date}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="start" class="col-sm-2 col-form-label">Start Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="start" class="form-control" required value="{{$year->start}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="end" class="col-sm-2 col-form-label">End Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="end" class="form-control"required value="{{$year->end}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status">
                                        <option value="">Please Select Status</option>
                                        @foreach($statuses as $status)
                                            <option {{ $status == $year->status ? 'selected' : '' }} value="{{ $status }}">{{ $status }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">

                            <button type="submit" class="btn btn-info float-right">Update Year</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
            </div>

        </div>
    </div>


@endsection

