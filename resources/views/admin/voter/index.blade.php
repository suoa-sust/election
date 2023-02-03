@extends('layouts.admin')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $title ?? 'All Voters' }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="#">Voters</a></li>

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

                        <a class="card-tools btn btn-info btn-sm" href="{{ route('voter.create') }}">Add New Voter</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Office</th>
                                <th>Vote Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $counter = 1;
                            @endphp
                            @foreach($voters as $voter)
                            <tr>
                                <td>{{ $voter->voter_no }}</td>
                                <td>{{ $voter->name }}</td>
                                <td>{{ $voter->designation }}</td>
                                <td>{{ $voter->office }}</td>
                                <td>
                                    <div class="form-check">
                                        <input type="hidden" class="user-id" value="{{ $voter->id }}">
                                        <input class="form-check-input cb-{{$counter}}" type="checkbox" {{$voter->vote_status == 'YES' ? 'checked' : ''}} >
                                        <label class="form-check-label" for="cb-{{$counter++}}">
                                            {{$voter->vote_status=='YES' ? "Voted" : "Not Voted"}}
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-xs disabled" href="{{ route('voter.edit', $voter->id) }}">Edit</a>
                                    <a class="btn btn-danger btn-xs deleteBtn disabled" data-toggle="modal" data-target="#delete-modal" href="#" deleteUrl="{{ route('voter.delete', $voter->id) }}">Delete</a>
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
                    <button type="button" class="btn btn-danger">Yes, Confirm</button>
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

                console.log(deleteUrl);
            });
        });


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //-------------CheckBox AJAX----------------------------
        $(document).ready(function() {
            function updateVoteStatus(event) {
                event.stopPropagation();
                let checkboxValue = $(this).is(":checked") ? true : false;
                let userId = $(this).closest('tr').find('.user-id').val();
                $(this).next().text(checkboxValue ? 'Voted' : 'Not Voted');
                $.ajax({
                    type: "POST",
                    url: "{{ route('updatevotestatus') }}",
                    data: {'checkboxValue': checkboxValue, 'userId': userId, '_token': "{{ csrf_token() }}"},
                    success: function (response) {
                        console.log(response);
                    },
                    error: function (xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            }

            for (let i = 1; i <= {{$counter}}; i++) {
                $(document).on("click", `.cb-${i}`, updateVoteStatus);
            }

            $('#datatable').on('draw.dt', function () {
                for (let i = 1; i <= {{$counter}}; i++) {
                    $(document).off("click", `.cb-${i}`, updateVoteStatus);
                    $(document).on("click", `.cb-${i}`, updateVoteStatus);
                }
            });
        });

    </script>

@endsection

