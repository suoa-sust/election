@extends('layouts.admin')
@section('content')

{{--    <div class="content-header">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row mb-2">--}}
{{--                <div class="col-sm-6">--}}
{{--                    <h1 class="m-0 text-dark">{{ $title ?? 'Counting Vote' }}</h1>--}}
{{--                </div><!-- /.col -->--}}
{{--                <div class="col-sm-6">--}}
{{--                    <ol class="breadcrumb float-sm-right">--}}
{{--                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>--}}
{{--                        <li class="breadcrumb-item active"><a href="#">Vote Count</a></li>--}}

{{--                    </ol>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Vote Count</div>
                    </div>
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Action</th>
                                <th>Seat</th>
                                <th>Votes</th>
                                <th>Designation</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $counter = 1;
                            @endphp
                            @foreach($candidates as $candidate)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $candidate->name }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-warning btn-xs voteAdd5" href="{{ route('vote.update', ['id' => $candidate->id, 'vote'=>'+5']) }}">+5</a>
                                        <a class="btn btn-primary btn-xs voteAdd1" href="{{ route('vote.update', ['id' => $candidate->id, 'vote'=>'+1']) }}">+1</a>
                                        <a class="btn btn-success btn-xs voteMinus1" href="{{ route('vote.update', ['id' => $candidate->id, 'vote'=>'-1']) }}">-1</a>
                                    </td>
                                    <td>{{ $candidate->seat->name }}</td>
                                    <td>{{ $candidate->number_of_votes }}</td>
                                    <td>{{ $candidate->designation }}</td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>

                </div>

            </div>

        </div>
    </div>


@endsection

@section('styles')

@endsection

@section('scripts')


    <script>
        $(function () {

            $(".deleteBtn").on("click", function () {
                let deleteUrl = $(this).attr('deleteUrl');

                console.log(deleteUrl);
            });
        });
    </script>

@endsection

