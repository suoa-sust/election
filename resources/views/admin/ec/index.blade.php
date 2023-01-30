@extends('layouts.admin')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $title ?? 'All Election Commission' }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">EC</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
{{--                        <h3 class="card-title">DataTable with minimal features & hover style</h3>--}}
                        <a class="card-tools btn btn-info btn-sm" href="{{ route('ec.create') }}">Add New EC Member</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>EC Role</th>
                                <th>Year</th>
                                <th>Office</th>
                                <th>Photo</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                              $counter = 1;
                            @endphp
                            @foreach($ecs as $ec)
                            <tr>
                                <td>{{ $counter++ }}</td>
                                <td>{{ $ec->name }}</td>
                                <td>{{ $ec->designation }}</td>
                                <td>{{ $ec->ec_role }}</td>
                                <td>{{ $ec->year->name }}</td>
                                <td>{{ $ec->office }}</td>
                                <td><img width="50px" src="{{ asset($ec->photo??'/images/dummy.png') }}" alt="Not Found"></td>
                                <td>{{ $ec->status }}</td>
                                <td>
                                    <a class="btn btn-primary btn-xs" href="{{ route('ec.edit', $ec->id) }}">Edit</a>
                                    <a class="btn btn-danger btn-xs deleteBtn" data-toggle="modal" data-target="#delete-modal" href="#" deleteUrl="{{ route('ec.delete', $ec->id) }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
{{--                            <tfoot>--}}
{{--                            <tr>--}}
{{--                                <th>Rendering engine</th>--}}
{{--                                <th>Browser</th>--}}
{{--                                <th>Platform(s)</th>--}}
{{--                                <th>Engine version</th>--}}
{{--                                <th>CSS grade</th>--}}
{{--                            </tr>--}}
{{--                            </tfoot>--}}
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

{{--    Modal Area --}}
        <div class="modal fade" id="delete-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Are you sure to delete ?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modalBody">
                        {{--                    <p>One fine body&hellip;</p>--}}

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <form id="deleteEcForm" action="#" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Yes, Confirm</button>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
@endsection

@section('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('scripts')
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <script>
        $(function () {

            $('#datatable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                "pageLength": 50
            });
            $(".deleteBtn").on("click", function () {
                let deleteUrl = $(this).attr('deleteUrl');
                $('#deleteEcForm').attr('action', deleteUrl);
                console.log(deleteUrl);
            });
        });
    </script>

@endsection

