@extends('backend')


@section('content')
    <section class="content-header">
        <h1>
            Beranda
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url('/') !!}"><i class="fa fa-dashboard"></i> Beranda</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('erroracl'))
                    {!! GlobalHelp::messages(Session::get('erroracl'), true) !!}
                @endif
            </div>
        </div>
        @include('module.dashboard._summary')
        @include('module.dashboard._graph')

        <div class="row">
            <div class="col-md-8">

            </div>
            <div class="col-md-4">

            </div>
        </div>

    </section>
@endsection

@section('script')
    <script src="{!! asset('plugins/chartjs/Chart.min.js') !!}"></script>
    <script src="{!! asset('plugins/chartjs/legend.js') !!}"></script>
    <script src="{!! asset('plugins/accounting/accounting.min.js') !!}" type="text/javascript"></script>
    <script type="text/javascript">


    </script>

@endsection


