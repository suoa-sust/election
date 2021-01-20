@extends('layouts.admin')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $title ?? 'Edit A Candidate' }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('candidate.index') }}">Candidates</a></li>
                        <li class="breadcrumb-item active">Edit Candidate</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="card card-default">
                    <div class="card-header">
{{--                        <h3 class="card-title">Add New User</h3>--}}
{{--                        <div class="card-tools">--}}
{{--                            <button class="btn btn-primary"> Add New User</button>--}}
{{--                        </div>--}}
                    </div>


                    <form class="form-horizontal" action="{{ route('candidate.update', $candidate->id) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name*</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" placeholder="Jack Doe" required value="{{ $candidate->name }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="designation" class="col-sm-2 col-form-label">Designation*</label>
                                <div class="col-sm-10">
                                    <input type="text" name="designation" class="form-control" placeholder="Deputy Registrar" value="{{ $candidate->designation }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="seat" class="col-sm-2 col-form-label">Seat*</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="seat_id">
                                        <option value="">Please Select a Seat</option>
                                        @foreach($seats as $id => $name)
                                            <option {{ $id == $candidate->seat_id ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="seat" class="col-sm-2 col-form-label">Year*</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="year_id">
                                        <option value="">Please Select Election Year</option>
                                        @foreach($years as $id => $name)
                                            <option {{ $id == $candidate->year_id ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="panel" class="col-sm-2 col-form-label">Panel </label>
                                <div class="col-sm-10">
                                    <input type="text" name="panel" class="form-control" placeholder="" value="{{ $candidate->panel }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="seat" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status">
                                        <option value="">Please Select Status</option>
                                        @foreach($statuses as $status)
                                            <option {{ $status == $candidate->status ? 'selected' : '' }} value="{{ $status }}">{{ $status }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info float-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

