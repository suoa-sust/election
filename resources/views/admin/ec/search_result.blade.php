@extends('layouts.admin')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $title ?? 'Search Result of year: '.$inputYear }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('year.index') }}">Year</a></li>
                        <li class="breadcrumb-item active">Search Result </li>
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
                        <a class="card-tools btn btn-info btn-sm" href="{{ route('year.search') }}">Search Again</a>
                    </div>

                    <div class="card-body">
                        @if($yearDetails==null)
                            <h2>No Details found. Try to search again !</h2>
                        @else
                            <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $counter = 1;
                                @endphp
                                @foreach($yearDetails as $year)
                                    <tr>
                                        <td>{{ $counter++ }}</td>
                                        <td>{{ $year->name }}</td>
                                        <td>{{ $year->start }}</td>
                                        <td>{{ $year->end }}</td>
                                        <td>{{ $year->status }}</td>
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection

