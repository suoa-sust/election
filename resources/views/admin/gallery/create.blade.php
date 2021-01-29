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
                        <div class="card-title">Add Photo to Gallery</div>
                    </div>

                    <livewire:upload-photo/>

                </div>

            </div>

        </div>
    </div>


@endsection

@section('styles')

    @livewireStyles

@endsection

@section('scripts')

    @livewireScripts

@endsection

