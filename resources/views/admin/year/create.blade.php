@extends('layouts.admin')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $title ?? 'Add New Year' }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Year</a></li>
                        <li class="breadcrumb-item active">New Year</li>
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
                    <form class="form-horizontal" action="{{route('year.store')}}" method="post">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Election Year</label>
                                <div class="col-sm-10">
                                    <input type="number" name="name" class="form-control" placeholder="2021" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="start" class="col-sm-2 col-form-label">Start Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="start" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="end" class="col-sm-2 col-form-label">End Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="end" class="form-control"required>
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

