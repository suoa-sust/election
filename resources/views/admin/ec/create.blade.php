@extends('layouts.admin')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $title ?? 'Add New EC Member' }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('ec.index') }}">EC</a></li>
                        <li class="breadcrumb-item active">Add New EC Member</li>
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
                    <form class="form-horizontal" action="{{ route('ec.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" placeholder="EC member name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                                <div class="col-sm-10">
                                    <input type="text" name="designation" class="form-control" placeholder="EC member designation" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="office" class="col-sm-2 col-form-label">Office</label>
                                <div class="col-sm-10">
                                    <input type="text" name="office" class="form-control" placeholder="EC member office name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="year" class="col-sm-2 col-form-label">Year</label>
                                <div class="col-sm-10">
                                    <select type="text" name="year" class="form-control" required>
                                        @foreach($years as $year)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ec_role" class="col-sm-2 col-form-label">EC Role</label>
                                <div class="col-sm-10">
                                    <select type="text" name="ec_role" class="form-control" required>
                                        @foreach($ec_roles as $ec_role)
                                            <option value="{{ $ec_role }}">{{ $ec_role=='CHIEF_ELECTION_COMMISSIONER'?'Chief Election Commissioner':'Election Commissioner' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                                <div class="col-sm-10">
{{--                                    @if ($photo)--}}
{{--                                        Photo Preview:--}}
{{--                                        <img src="{{ $photo->temporaryUrl() }}" width="300px">--}}
{{--                                    @endif--}}
                                    <input type="file" name="photo" class="form-control" placeholder="Upload photo" required>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">

                            <button type="submit" class="btn btn-info float-right">Add EC Member</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
            </div>

        </div>
    </div>


@endsection


@section('scripts')
    $(".picker").on("change", function() {
    var date = $(this).val();
    $(".date").val(date);
    })
@endsection
