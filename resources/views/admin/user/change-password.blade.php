@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Change Password</h3>
                    </div>
                    <!-- /.card-header -->
{{--                    <p class="login-box-msg">Register </p>--}}
                    <!-- form start -->
                    <form class="form-horizontal" _lpchecked="1" action="{{ route('post.change.password') }}" method="post">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" placeholder="Jack Doe"  readonly value="{{ auth()->user()->name }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">New Password *</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password *</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password_confirmation" class="form-control" id="inputPassword3" placeholder="Password" autocomplete="off" required>
                                </div>
                            </div>


                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">

                            <button type="submit" class="btn btn-info float-right">Submit</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
            </div>

        </div>
    </div>







@endsection
