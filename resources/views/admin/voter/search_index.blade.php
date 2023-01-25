@extends('layouts.admin')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $title ?? 'All Candidates' }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="#">Candidates</a></li>

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
<!-- Example single danger button -->
                        <div>
                            <form action="{{ route('voter.index') }}" method="GET">
                                <div class="form-inline">
                                    <label for="seat" class="col-sm-1 col-form-label">Seat*</label>
{{--                                    <div class="col-sm-4">--}}
                                        <select class="form-control-sm" name="seat_id">
                                            <option value="">All</option>
                                            @foreach($seats as $id => $name)
                                                <option {{ $id == $seat_id ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
{{--                                    </div>--}}

                                    <label for="seat" class="col-sm-1 col-form-label">Year*</label>
{{--                                    <div class="col-sm-4">--}}
                                        <select class="form-control-sm" name="year_id">
                                            <option value="">All</option>
                                            @foreach($years as $id => $name)
                                                <option {{ $id == $year_id ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
{{--                                    </div>--}}
                                    <div style="padding-left: 15px;">
                                        <button type="submit" class="btn btn-sm btn-info">Submit</button>
                                    </div>

                                </div>



                            </form>
                        </div>
                        <a class="card-tools btn btn-info btn-sm" href="{{ route('voter.create') }}">Add New Candidate</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Seat</th>
                                <th>Year</th>
                                <th>Panel</th>
                                <th>Votes</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $counter = 1;
                            @endphp
                            @foreach($voters as $voter)
                            <tr>
                                <td>{{ $counter++ }}</td>
                                <td>{{ $voter->name }}</td>
                                <td>{{ $voter->designation }}</td>
                                <td>{{ $voter->seat->name_bn }}</td>
                                <td>{{ $voter->year->name }}</td>
                                <td>{{ $voter->panel }}</td>
                                <td>{{ $voter->number_of_votes }}</td>
                                <td>
                                    <a class="btn btn-primary btn-xs" href="{{ route('voter.edit', $voter->id) }}">Edit</a>
                                    @unless($voter->year->status == 'COMPLETED')
                                    <a class="btn btn-danger btn-xs deleteBtn" data-toggle="modal" data-target="#delete-modal" href="#" deleteUrl="{{ route('voter.delete', $voter->id) }}">Delete</a>
                                    @endunless
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
                    <form id="deleteCandidateForm" action="#" method="POST">
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
                $('#deleteCandidateForm').attr('action', deleteUrl);
                console.log(deleteUrl);
            });
        });
    </script>

@endsection

