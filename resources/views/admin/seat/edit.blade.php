@extends('layouts.admin')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $title ?? 'Edit Seat' }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('seat.index') }}">Candidates</a></li>
                        <li class="breadcrumb-item active">Edit Seat</li>
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


                    <form class="form-horizontal" action="{{ route('seat.update', $seat->id) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name*</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" placeholder="Jack Doe" required value="{{ $seat->name }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="priority" class="col-sm-2 col-form-label">Priority*</label>
                                <div class="col-sm-10">
                                    <input type="text" name="priority" class="form-control" placeholder="priority" value="{{ $seat->priority }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="status" class="col-sm-2 col-form-label">Status*</label>
                                <div class="col-sm-10">
                                    <input type="text" name="status" class="form-control" placeholder="status" value="{{ $seat->status }}" required>
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

