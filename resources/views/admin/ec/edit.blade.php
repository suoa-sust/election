@extends('layouts.admin')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $title ?? 'Edit EC Member' }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('ec.index') }}">EC</a></li>
                        <li class="breadcrumb-item active">Edit EC Member</li>
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
                        {{--                        <h3 class="card-title">Add New EC</h3>--}}
                    </div>

                    <!-- form start -->
                    <form class="form-horizontal" action="{{route('ec.update', $ec->id)}}" method="post">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" placeholder="EC member name" required value="{{ $ec->name }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                                <div class="col-sm-10">
                                    <input type="text" name="designation" class="form-control" placeholder="EC member designation" required value="{{ $ec->designation }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="office" class="col-sm-2 col-form-label">Office</label>
                                <div class="col-sm-10">
                                    <input type="text" name="office" class="form-control" placeholder="EC member office name" required value="{{ $ec->office }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="year" class="col-sm-2 col-form-label">Year</label>
                                <div class="col-sm-10">
                                    <select type="text" name="year" class="form-control" required>
                                        @foreach($years as $year)
                                            <option value="{{ $year }}" {{ $year==$ec->year?'selected':'' }}>{{ $year }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ec_role" class="col-sm-2 col-form-label">EC Role</label>
                                <div class="col-sm-10">
                                    <select type="text" name="ec_role" class="form-control" required>
                                        @foreach($ec_roles as $ec_role)
                                            <option value="{{ $ec_role }}" {{ $ec_role==$ec->ec_role?'selected':'' }}>{{ $ec_role=='CHIEF_ELECTION_COMMISSIONER'?'Chief Election Commissioner':'Election Commissioner' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                                <div class="col-sm-10">
{{--                                    @if ($ec->photo)--}}
{{--                                        Photo Preview:--}}
{{--                                        <img src="{{ $ec->photo->temporaryUrl() }}" width="300px">--}}
{{--                                    @endif--}}
                                    <input type="file" name="photo" class="form-control" placeholder="Upload photo">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status">
                                        <option value="">Please Select Status</option>
                                        @foreach($statuses as $status)
                                            <option {{ $status == $ec->status ? 'selected' : '' }} value="{{ $status }}">{{ $status }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">

                            <button type="submit" class="btn btn-info float-right">Update EC</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
            </div>

        </div>
    </div>


@endsection

